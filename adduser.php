<?php

include('../config/dbConnection.php');
$username = $_POST['user_name'];
$firstname = $_POST['user_fname'];
$lastname = $_POST['user_lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);
$role = $_POST['person'];
$status = $_POST['status'];


$sql = "INSERT INTO `user_login` ( `user_email`, `user_name`, `user_fname`, `user_lname`, `user_password`, `view_task`, `role`, `user_status`)
 VALUES ( '" .$email. "', '" .$username ."', '" .$firstname. "', '" .$lastname. "', '" .$password. "','1', '" .$role. "', '" .$status. "')";
//print_r($sql);
if ($conn->query($sql) === TRUE) {
    $_SESSION['success_message'] = "<div class='alert alert-success'>Record inserted successfully</div>";
    header('Location: ../user.php');exit;
} else {
    $_SESSION['error_message'] = "<div class='alert alert-danger'>Error Record not inserted</div>";
    header('Location: ../userForm.php');exit;
}

?>