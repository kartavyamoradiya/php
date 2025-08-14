<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
include('../config/dbConnection.php');

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $task_id = $_POST['task_id'];
        $taskname = $_POST['task_name'];
        $description = $_POST['description'];
        $create = $_POST['create_date'];
        $enddate = $_POST['end_date'];
        $status = $_POST['status'];
        $user_id = $_POST['user_id'];

        $sql = "UPDATE task_list SET task_name = '".$taskname."', task_description = '".$description."', task_createdate = '".$create."', task_enddate = '$enddate',
        task_status = '$status', user_id = '$user_id' WHERE task_id = '$task_id'";
        print_r($sql);
        if ($conn->query($sql) === TRUE) {
            $_SESSION['success_message'] = "<div class='alert alert-success'>Task updated successfully.</div>";
        } else {
            $_SESSION['error_message'] = "<div class='alert alert-danger'>Error updating task</div>";
        }
    }
header('Location: ../task.php');exit;
?>