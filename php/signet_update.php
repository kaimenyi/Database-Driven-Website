<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include 'technicaldb.php';

$national_id=$_POST['national_id'];
$visitor_station=$_POST['visitor_station'];
$time_in=$_POST['time_in'];
$engineer_on_duty=$_POST['engineer_on_duty'];

mysqli_query($conn,"INSERT INTO signet_visitors (national_id,visitor_station,time_in,engineer_on_duty)
		        VALUES ('$national_id', '$visitor_station','$time_in','$engineer_on_duty')");
header('location: ../portal/portal.php');
?>