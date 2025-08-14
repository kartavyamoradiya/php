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
                    <form action="controler/edittask.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="heading mb-3">
                            <h5>Task add</h5>
                        </div>
                        <div class="form-group row">
                            <input type="hidden" name="task_id" value="<?php echo $task['task_id']; ?>">
                            <div class="input-field">
                                <label class=" col-form-label">Taskname</label>
                                <input type="text" class="form-control" name="task_name"  value="<?php echo $task['task_name'];?>"  >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="input-field email">
                                <label class="col-form-label">Task Description</label>
                                <input type="text" class="form-control" name="description" value="<?php echo $task['task_description'];?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class=" col-form-label">Task Creation Date</label>
                                <input type="date" class="form-control" name="create_date" value="<?php echo $task['task_createdate'];?>" >
                            </div>
                            <div class="col-sm-6">
                                <label class="col-form-label">Task End Date</label>
                                <input type="date" class="form-control" name="end_date" value="<?php echo $task['task_enddate'];?>" >
                            </div>
                        </div>                       
                        <div class="form-group row">
                            <label class="col-sm-10 col-form-label">Task Status</label>
                            <div class="col-sm-2 col-task">
                                <select name="status" id="Status">
                                    <option value="Pending" <?php echo ($task['task_status'] == 'Pending') ? 'selected' : ''; ?>>Pending</option>
                                    <option value="Processing" <?php echo ($task['task_status'] == 'Processing') ? 'selected' : ''; ?>>Processing</option>
                                    <option value="Completed" <?php echo ($task['task_status'] == 'Completed') ? 'selected' : ''; ?>>Completed</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-10 col-form-label">Task Permission</label>
                            <div class="col-sm-2 col-task">
                                <select name="user_id" id="status" >
                                    <option value="">choes user </option>
                                    <?php
                                        include('config/dbConnection.php');
                                        $sql = "SELECT * FROM user_login";
                                        $result = $conn->query($sql);
                                        //print_r($result);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $selected = ($row['user_id'] == $task['user_id']) ? 'selected' : '';
                                                    echo "<option value='" . $row['user_id'] . "' $selected>" . $row['user_name'] . "</option>";
                                            }
                                        }
                                        ?>
                                </select>
                            </div>
                        </div>
                        <div class="input-field button">
                            <input class="btn login" type="submit" value="Done" name="login" />
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>
</body>
</html>