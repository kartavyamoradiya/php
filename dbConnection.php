<?php

$conn = new mysqli("localhost", "root", "Mysql@123", "task_manager");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}//echo "connected ghate to jindagi ghate.";
?>