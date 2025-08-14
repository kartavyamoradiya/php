<?php
session_start();
$conn = new mysqli("localhost", "root", "Mysql@123", "CMS");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}echo"connected";
$name = $_POST['name'];
$content = $_POST['content'];

$sql = "INSERT INTO `cmsSave` (`name`, `content`) VALUES ('" . $name . "', '" . $content . "')";
	if ($conn->query($sql) === TRUE) {
    $_SESSION['success_message'] = "Record inserted successfully";
} else {
    $_SESSION['error_message'] = "Error during record insert: " . $conn->error;
}

header("Location: index.php");
exit();
?>