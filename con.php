<?php
$conn =  new mysqli("localhost", "root", "Mysql@123", "navaratri_event");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}//echo "connected ghate to jindagi ghate.";