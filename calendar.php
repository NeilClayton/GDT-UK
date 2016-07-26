<?php
session_start();

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

include('Actions/connect.php');
include('Classes/class_calendar.php');

$calendar = new booking_diary($link);
$calendar = new booking_diary($link);

if(isset($_GET['month'])) $month = $_GET['month']; else $month = date("m");
if(isset($_GET['year'])) $year = $_GET['year']; else $year = date("Y");
if(isset($_GET['day'])) $day = $_GET['day']; else $day = 0;

// Unix Timestamp of the date a user has clicked on
$selected_date = mktime(0, 0, 0, $month, 01, $year);

// Unix Timestamp of the previous month which is used to give the back arrow the correct month and year
$back = strtotime("-1 month", $selected_date);

// Unix Timestamp of the next month which is used to give the forward arrow the correct month and year
$forward = strtotime("+1 month", $selected_date);

	include('Includes/header2.html');
	include('Includes/nav.php');
        
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $calendar->after_post($month, $day, $year);
}

// Call calendar function
$calendar->make_calendar($selected_date, $back, $forward, $day, $month, $year);

?>
</div>
</div>
<?php include "Includes/footer.php"; ?>
</body>
</html>
