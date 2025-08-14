<?php
session_start();
include('config/dbConnection.php');
include('controler/userCheck.php');
$task_id = $_GET['id'];
$sql = "SELECT * FROM task_list WHERE task_id = '" . $task_id . "'";
$result = $conn->query($sql);
$task = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php include('msg.php') ?>
    <div class="login-main-content">
        <div class="container">
            <div class="login-content card user-form">
                <div class="card-body">
                    <form action="controler/edituserTask.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <input type="hidden" name="task_id" value="<?php echo $task['task_id']; ?>">
                            <label class="col-sm-10 col-form-label">Task Status</label>
                            <div class="col-sm-2 col-task">
                                <select name="status" id="Status">
                                    <option value="Pending"  <?php echo ($task['task_status'] == 'Pending') ? 'selected' : ''; ?>>Pending</option>
                                    <option value="Processing" <?php echo ($task['task_status'] == 'Processing') ? 'selected' : ''; ?>>Processing</option>
                                    <option value="Completed" <?php echo ($task['task_status'] == 'Completed') ? 'selected' : ''; ?>>Completed</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-field button">
                            <input class="btn login btn-primary" type="submit" value="Done" name="login" />
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>
</body>
</html>