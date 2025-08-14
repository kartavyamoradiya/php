<?php
//   error_reporting(E_ALL);
//   ini_set('display_errors', 1);
session_start();
$conn = new mysqli("localhost", "root", "Mysql@123", "task_manager");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo '<pre>';
// print_r($_POST);
//  echo '</pre>';
if (!empty($_POST) && isset($_POST['username']) && isset($_POST['password']) && $_POST['username'] && $_POST['password']) {
    $name = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM user_login WHERE `user_name` = '". $name ."' AND user_password = '". $password ."'";
    
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['user'] = $result->fetch_assoc();
        $_SESSION['success_message'] = "Successfully logged in";
        header('Location: ../usertask.php');
        exit;
    } else {
        $_SESSION['error_message'] = "<div class='alert alert-danger'>Please check your username or password</div>";
        header('Location: ../userLogin.php');
        exit;
    }
}
?>