<?php
session_start();
include('config/dbConnection.php');

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql ="DELETE FROM `user_login` WHERE user_id =' $user_id'";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "<div class='alert alert-success'>User deleted successfully</div>";
        header("Location: user.php");
    } else {
        $_SESSION['error_message'] = "<div class='alert alert-danger'>Error deleting user</div>";
    }
}

$conn->close();
exit;

?>

