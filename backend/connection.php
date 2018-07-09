<?php
//error_reporting(0);

global $dbhost, $dbuser, $dbpass, $db, $conn;
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="basu";
$conn=mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die ("Something Wrong");
?>