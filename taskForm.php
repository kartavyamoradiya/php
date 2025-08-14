<?php
 session_start();
 include('controler/userCheck.php');
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
                    <form action="controler/addtask.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="heading mb-3">
                            <h5>Task add</h5>
                        </div>
                        <div class="form-group row">
                            <input type="hidden" name="task_id" value="<?php echo $task['task_id']; ?>">
                            <div class="input-field">
                                <label class=" col-form-label">Taskname</label>
                                <input type="text" class="form-control" name="task_name"   placeholder="Task Name" required >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="input-field email">
                                <label class="col-form-label">Task Description</label>
                                <input type="text" class="form-control" name="description"   placeholder="Task Description" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class=" col-form-label">Task Creation Date</label>
                                <input type="date" class="form-control" name="create_date"  placeholder="Task Creation Date" required>
                            </div>
                            <div class="col-sm-6">
                                <label class="col-form-label">Task End Date</label>
                                <input type="date" class="form-control" name="end_date"  placeholder="Task End Date"  required>
                            </div>
                        </div>                       
                        <div class="form-group row">
                            <label class="col-sm-10 col-form-label">Task Status</label>
                            <div class="col-sm-2 col-task">
                                <select name="status" id="Status" required>
                                    <option value="Pending">Pending</option>
                                    <option value="Processing">Processing</option>
                                    <option value="Completed">Completed</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-10 col-form-label">Task Permission</label>
                            <div class="col-sm-2 col-task">
                                <select name="user_id" id="status" required>
                                    <option value="">choes user </option>
                                    <?php
                                        include('config/dbConnection.php');
                                        $sql = "SELECT * FROM user_login";
                                        $result = $conn->query($sql);
                                        //print_r($result);
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                    echo "<option value='" . $row['user_id'] . "' $selected>" . $row['user_name'] . "</option>";
                                            }
                                        }
                                        ?>
                                </select>
                            </div>
                        </div>
                        <div class="input-field button">
                            <input class="btn btn-primary login" type="submit" value="Done" name="login" />
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>
</body>
</html>