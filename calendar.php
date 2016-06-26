<?php

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GDT: Nottingham Driving School - Driving Lessons UK</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="JS/bootstrap.min.js"></script>
	<!-- Custom JS -->
	<script src="JS/calendar.js"></script>
	<script src="https://use.fontawesome.com/71ebc9e44c.js"></script>
	<!-- Custom CSS -->
	<link href="CSS/styles.css" rel="stylesheet">
	<link href="CSS/calendar.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
	include('Includes/header2.html');
	include('Includes/nav.php');
        
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $calendar->after_post($month, $day, $year);  
}   

// Call calendar function
$calendar->make_calendar($selected_date, $back, $forward, $day, $month, $year);

?>
<?php //include "Includes/footer.html"; ?>
</body>
</html>
