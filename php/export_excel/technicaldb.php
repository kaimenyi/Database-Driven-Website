<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect("127.0.0.1", "root", "1334", "technical_services") or die('Error connecting to MySQL server.');

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);}
?>