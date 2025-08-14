<?php

include('../config/dbConnection.php');
$taskname = $_POST['task_name'];
$description = $_POST['description'];
$create = $_POST['create_date'];
$enddate = $_POST['end_date'];
$status = $_POST['status'];
$user_id = $_POST['user_id'];

$sql = "INSERT INTO `task_list` (  `task_name`, `task_description`, `task_createdate`, `task_enddate`, `task_status`, `user_id`) VALUES ( '" .$taskname. "', '" .$description ."', '" .$create. "', '" .$enddate. "', '" .$status. "', '" .$user_id. "')";
print_r($sql);
if ($conn->query($sql) === TRUE) {
    $_SESSION['success_message'] = "<div class='alert alert-success'>Record inserted successfully</div>";
    header('Location: ../task.php');exit;
} else {
    $_SESSION['error_message'] = "<div class='alert alert-danger'>Error Record not inserted</div>";
    header('Location: ../taskForm.php');exit;
}

?>