<?php
session_start();
$conn = new mysqli("localhost", "root", "Mysql@123", "task_manager");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!empty($_POST) && isset($_POST['main_username']) && isset($_POST['main_password']) && $_POST['main_username'] && $_POST['main_password']) {
    $username = $_POST['main_username'];
    $password = md5($_POST['main_password']);
    $role = $_POST['person'];

    $sql = "SELECT * FROM main_userLogin WHERE `user_name` = '". $username ."' AND user_password = '". $password ."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['user'] = $result->fetch_assoc();
        header('Location: ../dashbord.php');
        exit;
    } else {
        $_SESSION['error_message'] = "<div class='alert alert-danger'>Please enter your correct password!</div>";
    }
} else {
    $_SESSION['error_message'] = "<div class='alert alert-danger'>Please enter your correct password!</div>";
}
header('Location: ../login.php');
exit;
?>
