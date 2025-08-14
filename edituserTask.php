<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
include('../config/dbConnection.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $task_id = $_POST['task_id'];
        $status = $_POST['status'];
        $user_id = $_POST['user_id'];

        $sql = "UPDATE task_list SET task_status = '$status' WHERE task_id = '$task_id'";
        print_r($sql);
        if ($conn->query($sql) === TRUE) {
            $_SESSION['success_message'] = "<div class='alert alert-success'>Task updated successfully.</div>";
        } else {
            $_SESSION['error_message'] = "<div class='alert alert-danger'>Error updating task</div>";
        }
    }
header('Location: ../usertask.php');exit;
?>