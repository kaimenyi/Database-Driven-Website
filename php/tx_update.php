<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include 'technicaldb.php';

$date_now=$_POST['date_now'];
$engineer_name=$_POST['engineer_name'];
$location=$_POST['location'];
$signal_reception=$_POST['signal_reception'];
$signal_transmission=$_POST['signal_transmission'];
$services =$_POST['services'];
$mains=$_POST['mains'];
$message=$_POST['message'];

mysqli_query($conn,"INSERT INTO tx_records (date_now,engineer_name,location,signal_reception,signal_transmission, services, mains, message)
		        VALUES ('$date_now', '$engineer_name','$location','$signal_reception','$signal_transmission', '$services', '$mains', '$message')");
header('location: ../portal/portal.php');
?>