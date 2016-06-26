<?php

// Make a MySQL Connection
$host="localhost:3306";
$user="root";
$password="";
$db = "gdt";

$link = mysqli_connect($host, $user, $password);
mysqli_select_db($link, $db) or die(mysql_error());

?>
