<?php

$conn = new mysqli("localhost", "root", "Mysql123", "CMS");
session_start();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}echo"connected";
?>