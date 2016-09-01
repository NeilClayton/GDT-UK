<?php
date_default_timezone_set('Europe/London');


class booking_diary {


// Mysqli connection
function __construct($link) {
    $this->link = $link;
}

// Settings you can change:


// Time Related Variables
public $booking_start_time          = "08:30";			// The time of the first slot in 24 hour H:M format
public $booking_end_time            = "19:00"; 			// The time of the last slot in 24 hour H:M format
public $booking_frequency           = 15;   			// The slot frequency per hour, expressed in minutes.

// Day Related Variables

public $day_format					= 1;				// Day format of the table header.  Possible values (1, 2, 3)
															// 1 = Show First digit, eg: "M"
															// 2 = Show First 3 letters, eg: "Mon"
															// 3 = Full Day, eg: "Monday"

public $day_closed					= array(/*"Sunday", "Monday"*/); 	// If you don't want any 'closed' days, remove the day so it becomes: = array();
public $day_closed_text				= "<i class='fa fa-lock' aria-hidden='true'></i>"; 		// If you don't want any any 'closed' remove the text so it becomes: = "";
public $current_day;
// Cost Related Variables
//public $cost_per_slot				= 20.50;			// The cost per slot
//F$public $cost_currency_tag			= "&pound;";		// The currency tag in HTML such as &euro; &pound; &yen;


//  DO NOT EDIT BELOW THIS LINE

public $day_order	 				= array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
public $day, $month, $year, $selected_date, $back, $back_month, $back_year, $forward, $forward_month, $forward_year, $bookings, $count, $days, $is_slot_booked_today;


/*========================================================================================================================================================*/


function make_calendar($selected_date, $back, $forward, $day, $month, $year) {

    // $day, $month and $year are the $_GET variables in the URL
    $this->day = $day;
    $this->month = $month;
    $this->year = $year;

	// $back and $forward are Unix Timestamps of the previous / next month, used to give the back arrow the correct month and year
    $this->selected_date = $selected_date;
    $this->back = $back;
    $this->back_month = date("m", $back);
    $this->back_year = date("Y", $back); // Minus one month back arrow

    $this->forward = $forward;
    $this->forward_month = date("m", $forward);
    $this->forward_year = date("Y", $forward); // Add one month forward arrow

    // Make the booking array
    $this->make_booking_array($year, $month);

}


function make_booking_array($year, $month, $j = 0) {

	$stmt = $this->link->prepare("SELECT date, start FROM bookings WHERE date LIKE  CONCAT(?, '-', ?, '%')");
	$this->is_slot_booked_today = 0; // Defaults to 0

	$stmt->bind_param('ss', $year, $month);
	//$stmt->bind_result($name, $date, $start);
	$stmt->execute();
	$stmt->store_result();

	while($stmt->fetch()) {

		$this->bookings_per_day[$date][] = $start;

		$this->bookings[] = array(
            //"name" => $name,
            "date" => $date,
            "start" => $start
 		);

		// Used by the 'booking_form' function later to check whether there are any booked slots on the selected day
		if($date == $this->year . '-' . $this->month . '-' . $this->day) {
			$this->is_slot_booked_today = 1;
		}

	}

	// Calculate how many slots there are per day
	$this->slots_per_day = 0;
	for($i = strtotime($this->booking_start_time); $i<= strtotime($this->booking_end_time); $i = $i + $this->booking_frequency * 60) {
		$this->slots_per_day ++;
	}

	$stmt->close();
    $this->make_days_array($year, $month);

} // Close function


function make_days_array($year, $month) {

    // Calculate the number of days in the selected month
    $num_days_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);

    // Make $this->days array containing the Day Number and Day Number in the selected month

	for ($i = 1; $i <= $num_days_month; $i++) {

		// Work out the Day Name ( Monday, Tuesday... ) from the $month and $year variables
        $d = mktime(0, 0, 0, $month, $i, $year);

		// Create the array
        $this->days[] = array("daynumber" => $i, "dayname" => date("l", $d));
    }

	/*
	Sample output of the $this->days array:

	[0] => Array
        (
            [daynumber] => 1
            [dayname] => Monday
        )

    [1] => Array
        (
            [daynumber] => 2
            [dayname] => Tuesday
        )
	*/

	$this->make_blank_start($year, $month);
	$this->make_blank_end($year, $month);

} // Close function


function make_blank_start($year, $month) {

	/*
	Calendar months start on different days
	Therefore there are often blank 'unavailable' days at the beginning of the month which are showed as a grey block
	The code below creates the blank days at the beginning of the month
	*/

	// Get first record of the days array which will be the First Day in the month ( eg Wednesday )
	$first_day = $this->days[0]['dayname'];	$s = 0;

		// Loop through $day_order array ( Monday, Tuesday ... )
		foreach($this->day_order as $i => $r) {

			// Compare the $first_day to the Day Order
			if($first_day == $r && $s == 0) {

				$s = 1;  // Set flag to 1 stop further processing

			} elseif($s == 0) {

				$blank = array(
					"daynumber" => 'blank',
					"dayname" => 'blank'
				);

				// Prepend elements to the beginning of the $day array
				array_unshift($this->days, $blank);
			}

	} // Close foreach

} // Close function


function make_blank_end($year, $month) {

	/*
	Calendar months start on different days
	Therefore there are often blank 'unavailable' days at the end of the month which are showed as a grey block
	The code below creates the blank days at the end of the month
	*/

	// Add blank elements to end of array if required.
    $pad_end = 7 - (count($this->days) % 7);

    if ($pad_end < 7) {

		$blank = array(
			"daynumber" => 'blank',
			"dayname" => 'blank'
		);

        for ($i = 1; $i <= $pad_end; $i++) {
			array_push($this->days, $blank);
		}

    } // Close if

	$this->calendar_top();

} // Close function


function calendar_top() {

	// This function creates the top of the table containing the date and the forward and back arrows

	echo "
	<div class='container-fluid'>
   		<div class='row calendar'>
   			<div class='col-md-4 col-md-offset-2'>
			<table id='calendar' class='center-block'>
    		    <tr id='week'>
    		    <td align='left'><a href='?month=" . date("m", $this->back) . "&amp;year=" . date("Y", $this->back) . "'><i class='fa fa-chevron-left' aria-hidden='true'></i></a></td>
    		    <td colspan='5' id='center_date'>" . date("F, Y", $this->selected_date) . "</td>    
    		    <td align='right'><a href='?month=" . date("m", $this->forward) . "&amp;year=" . date("Y", $this->forward) . "'><i class='fa fa-chevron-right' aria-hidden='true'></i></a></td>
    		</tr>
    		<tr>";

				/*
				Make the table header with the appropriate day of the week using the $day_format variable as user defined above
				Definition:

					1: Show First digit, eg: "M"
					2: Show First 3 letters, eg: "Mon"
					3: Full Day, eg: "Monday"

				*/

				foreach($this->day_order as $r) {

					switch($this->day_format) {

						case(1):
							echo "<th>" . substr($r, 0, 1) . "</th>";
						break;

						case(2):
							echo "<th>" . substr($r, 0, 3) . "</th>";
						break;

						case(3):
							echo "<th>" . $r . "</th>";
						break;

					} // Close switch

				} // Close foreach


			echo "</tr>";

	$this->make_cells();

} // Close function


function make_cells($table = '') {

	echo "<tr>";

	foreach($this->days as $i => $r) { // Loop through the date array

		$j = $i + 1; $tag = 0;

		// If the the current day is found in the day_closed array, bookings are not allowed on this day
		if(in_array($r['dayname'], $this->day_closed)) {
			echo "\r\n<td width='21' valign='top' class='closed'>" . $this->day_closed_text . "</td>";
			$tag = 1;
		}


		// Past days are greyed out
		if (mktime(0, 0, 0, $this->month, sprintf("%02s", $r['daynumber']) + 1, $this->year) < strtotime("now") && $tag != 1) {

			echo "\r\n<td width='21' valign='top' class='past'>";
				// Output day number
				if($r['daynumber'] != 'blank') echo $r['daynumber'];

			echo "</td>";
			$tag = 1;
		}


		// If the element is set as 'blank', insert blank day
		if($r['dayname'] == 'blank' && $tag != 1) {
			echo "\r\n<td width='21' valign='top' class='unavailable'><i class='fa fa-times' aria-hidden='true'></i></td>";
			$tag = 1;
		}


		// Now check the booking array $this->booking to see whether we have a booking on this day
		$current_day = $this->year . '-' . $this->month . '-' . sprintf("%02s", $r['daynumber']);

		if(isset($this->bookings_per_day[$current_day]) && $tag == 0) {

			$current_day_slots_booked = count($this->bookings_per_day[$current_day]);

				if($current_day_slots_booked < $this->slots_per_day) {

					echo "\r\n<td class='part_booked' width='21' valign='top'>
					<a href='calendar.php?month=" .  $this->month . "&amp;year=" .  $this->year . "&amp;day=" . sprintf("%02s", $r['daynumber']) . "' title='This day is part booked'>" .
					$r['daynumber'] . "</a></td>";
					$tag = 1;

				} else {

					echo "\r\n<td class='fully_booked' width='21' valign='top'>
					<a href='calendar.php?month=" .  $this->month . "&amp;year=" .  $this->year . "&amp;day=" . sprintf("%02s", $r['daynumber']) . "' title='This day is fully booked'>" .
					$r['daynumber'] . "</a></td>";
					$tag = 1;

				} // Close else

		} // Close if


		if($tag == 0) {

			echo "\r\n<td class='green' width='21' valign='top'>
			<a href='calendar.php?month=" .  $this->month . "&amp;year=" .  $this->year . "&amp;day=" . sprintf("%02s", $r['daynumber']) . "' title='Please click to view bookings'>" .
			$r['daynumber'] . "</a></td>";

		}

		// The modulus function below ($j % 7 == 0) adds a <tr> tag to every seventh cell + 1;
			if($j % 7 == 0 && $i >1) {
			echo "\r\n</tr>\r\n<tr>"; // Use modulus to give us a <tr> after every seven <td> cells
		}

	}

	echo "</tr></table>
			</div>";

	if(isset($_GET['year']))
	$this->basket();

	// Check booked slots for selected date and only show the booking form if there are available slots
	$current_day = $this->year . '-' . $this->month . '-' . $this->day;
	$slots_selected_day = 0;

	if(isset($this->bookings_per_day[$current_day]))
	$slots_selected_day = count($this->bookings_per_day[$current_day]);

	if($this->day != 0 && $slots_selected_day < $this->slots_per_day) {
		$this->booking_form();
	}


} // Close function


function booking_form() {

	echo "<div class='col-md-4'>
			
				<div id='outer_booking'><h2>Available Slots</h2>
					<p>The following start times are available on <span> " . $this->day . "-" . $this->month . "-" . $this->year . "</span></p>
					<button type='button' name='selectedTime' ' onclick='openBookForm()' class='btn'>Book Slot/s</button>
					<table id='booking' class='center-block'>
						<tr>
							<th>Start</th>
							<th>End</th>
							<th>Book</th>			
						</tr>";
						// Create $slots array of the booking times
						for($i = strtotime($this->booking_start_time); $i<= strtotime($this->booking_end_time); $i = $i + $this->booking_frequency * 60) {
							$slots[] = date("H:i:s", $i);
						}


						// Loop through $this->bookings array and remove any previously booked slots

						if($this->is_slot_booked_today == 1) { // $this->is_slot_booked_today created in function 'make_booking_array'

							foreach($this->bookings as $i => $b) {

								if($b['date'] == $this->year . '-' . $this->month . '-' . $this->day) {

									// Remove any booked slots from the $slots array
									$slots = array_diff($slots, array($b['start']));

								} // Close if

							} // Close foreach

						} // Close if
						// Loop through the $slots array and create the booking table

						foreach($slots as $i => $start) {

							// Calculate finish time
							$finish_time = strtotime($start) + $this->booking_frequency * 60;
							echo "<script>

function getRadioValue(id) {
var radioBtn = document.getElementById(id);
var lessonTime = radioBtn.value;

//alert(radioBtn.value);
}  

</script>";


							echo "
						<tr>\r\n
							<td>" . $start . "</td>
							<td>" . date("H:i:s", $finish_time) . "</td>
							<!--<td></td>\r\n-->
							<td width='110'><input type='radio' id='".$start."' name='timeSlot' value='" . $start . "' class='fields' onclick='getRadioValue(this.id)' ></td>
						</tr>";
						} // Close foreach
						foreach ($this->bookings as $booking) {
							if($booking['date'] == $this->year.'-'.$this->month.'-'.$this->day) {
								foreach ($booking as $key => $value) {
									$booking_name;
									$time;
									switch ($key) {
										case "name":
											$booking_name = $value;
											break;
										case "date":
											break;
										case "start":
											$time = $value;
											$endtime = strtotime("+15 minutes", strtotime($time));
											echo "
											<tr>
											<td>" . $time . "</td>
											<td>" . date('H:i:s', $endtime) . "</td>
											<td>" . $booking_name . "</td>
											</tr>";
											break;
									}
								}
							}
						}

	echo "</table></form></div><!-- Close outer_booking DIV -->
			</div>
		</div>";

} // Close function

function basket($selected_day = '') {
	//if(isset($_POST['selectedTime'])){
		//var_dump($_POST);
		//if(isset($_POST['timeSlot'])){
		//	$_SESSION['timeslot'] = $_POST['timeSlot'];
		//}
	//}
	if(!isset($_GET['day']))
	$day = '01';
	else
	$day = $_GET['day'];

	// Validate GET date values
	if(checkdate($_GET['month'], $day, $_GET['year']) !== false) {
		$selected_day = $_GET['year'] . '-' . $_GET['month'] . '-' . $day;
	} else {
		echo 'Invalid date!';
		exit();
	}

	echo "
	<div id='outer_basket'>
		<div class='basket-container'>
		<button type='button' onclick='closeBookForm()' class='close-window pull-right'><i class='fa fa-remove' aria-hidden='true'></i></button><br>
			<h2>Selected Slots</h2>
			<form method='post' action='Actions/lessons.php'>
				<div class='form-group'>
					<label for='name'>Client</label>
					<select class='form-control' id='name' name='name' required>
						<option value='' selected>...</option>
						<option value='JoeBloggs'>Joe Bloggs</option>
						<option value='JohnDoe'>John Doe</option>
					</select>
				</div>
				<div class='form-group'>
					<label for='duration'>Duration</label>
					<select class='form-control' id='duration' name='duration' required>
						<option selected value=''>...</option>
						<option value='1'>1 hour</option>
						<option value='1.5'>1.5 hours</option>
						<option value='2'>2 hours</option>
					</select>
				</div>
				<div class='form-group'>
					<h6>How many lessons are being booked?</h6>
					<label class='radio-inline'>
						<input type='radio' name='lesson' value='1' checked>1
					</label>
					<label class='radio-inline'>
						<input type='radio' name='lesson' value='10'>10
					</label>
					<label class='radio-inline'>
						<input type='radio' name='lesson' value='20'>20
					</label>
					<label class='radio-inline'>
						<input type='radio' name='lesson' value='30'>30
					</label>
				</div>		
				<input type='hidden' name='slots_booked' id='slots_booked'>
				<!--<input type='hidden' name='cost_per_slot' id='cost_per_slot' value=''>-->
				<input type='hidden' name='booking_date' value='" . $_GET['year'] . '-' . $_GET['month'] . '-' . $day . "'>
				<button type='submit' name='addBooking' class='btn btn-success center-block'>Add booking<i class='fa fa-send' aria-hidden='true'></i></button>
			<!--</form>-->
		</div>
	</div>
	<script src='../JS/calendar.js'></script>";
} // Close function
} // Close Class
