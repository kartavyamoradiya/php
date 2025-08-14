<?php
//  error_reporting(E_ALL);
//  ini_set('display_errors', 1);

 include('../config/dbConnection.php');

// echo '<pre>';
// print_r($_POST);
//  echo '</pre>';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user_id = $_POST['user_id'];
        $username = $_POST['user_name'];
        $firstname = $_POST['user_fname'];
        $lastname = $_POST['user_lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['person'];
        $status = $_POST['status'];

        $sql = "UPDATE user_login SET user_name = '$username', user_fname = '$firstname', user_lname = '$lastname', 
        user_email = '$email', user_password = '$password', role = '$role', user_status ='$status' WHERE user_id = '$user_id'";
        //print_r($sql);
       if ($conn->query($sql) === TRUE) {
            $_SESSION['success_message'] = "<div class='alert alert-success'>User updated successfully.</div>";
        } else {
            $_SESSION['error_message'] = "<div class='alert alert-danger'>Error updating user</div>";
        }
 
    }
    header('Location: ../user.php');exit;
?>