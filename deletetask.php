<?php
session_start();
include('config/dbConnection.php');

if (isset($_GET['id'])) {
    $task_id= $_GET['id'];

     $sql = "DELETE FROM `task_list` WHERE task_id =' $task_id'";
     
     if ($conn->query($sql) === TRUE) {
        $_SESSION['success_message'] = "<div class='alert alert-success'>Task deleted successfully</div>";
        header('Location: task.php');
    } else {
        $_SESSION['error_message'] = "<div class='alert alert-danger'>Error deleting Task</div>";
    }
}
    $conn->close();
    
    exit;
?>