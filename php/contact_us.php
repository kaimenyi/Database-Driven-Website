<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include 'technicaldb.php';

$guest_name=$_POST['guest_name'];
$guest_email=$_POST['guest_email'];
$guest_subject=$_POST['guest_subject'];
$guest_message=$_POST['guest_message'];

mysqli_query($conn,"INSERT INTO contact (guest_name,guest_email,guest_subject,guest_message)
		        VALUES ('$guest_name','$guest_email','$guest_subject','$guest_message')");
header('location: ../contact.php');
?>