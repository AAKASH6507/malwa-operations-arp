<?php
$conn = new mysqli("localhost","root","","malwa_operations_arp");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
