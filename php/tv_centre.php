<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include 'technicaldb.php';

$time_now=$_POST['time_now'];
$source=$_POST['source'];
$programmes=$_POST['programmes'];
$power_radiated=$_POST['power_radiated'];
$remarks=$_POST['remarks'];

mysqli_query($conn,"INSERT INTO tv_centre (time_now,source,programmes,power_radiated,remarks)
		        VALUES ('$time_now', '$source','$programmes','$power_radiated','$remarks')");
header('location: ../portal/portal.php');
?>