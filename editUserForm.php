<?php
session_start();
include('config/dbConnection.php');
include('controler/userCheck.php');
$user_id = $_GET['id'];
$sql = "SELECT * FROM user_login WHERE user_id = '" . $user_id . "'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
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
                    <form action="controler/edituser.php" method="POST" enctype="multipart/form-data">
                        <div class="heading mb-3">
                            <h5>User add</h5>
                        </div>
                        <div class="form-group row">
                            <input type="hidden" name="user_id" value="<?php echo $user['user_id']; ?>">
                            <div class="input-field">
                                <label class=" col-form-label">Username</label>
                                <input type="hi" class="form-control" name="user_name" value="<?php echo $user['user_name'];?>" placeholder="Username"  required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class=" col-form-label">User-Firstname</label>
                                <input type="text" class="form-control" name="user_fname" value="<?php echo $user['user_fname'];?>" placeholder="Firstname" >
                            </div>
                            <div class="col-sm-6">
                                <label class="col-form-label">User-Lastname</label>
                                <input type="text" class="form-control" name="user_lname" value="<?php echo $user['user_lname'];?>" placeholder="Lastname" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="input-field email">
                                <i class="fa-regular fa-envelope"></i> <label class="col-form-label">User-Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $user['user_email'];?>" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Password</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="password" value="<?php echo $user['user_password'];?>" placeholder="password" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-10 col-form-label">Choose person</label>
                            <div class="col-sm-2 col-task">
                                <select name="person" id="person">
                                    <option value="user" <?php echo ($user['person'] == 'user') ? 'selected' : ''; ?>>User</option>
                                    <option value="admin" <?php echo ($user['person'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-10 col-form-label">User status</label>
                            <div class="col-sm-2 col-task">
                                <select name="status" id="status">
                                    <option value="Active" <?php echo ($user['status'] == 'Active') ? 'selected' : ''; ?>>Active</option>
                                    <option value="Unactive" <?php echo ($user['status'] == 'Unactive') ? 'selected' : ''; ?>>Unactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row checkbox">
                            <input  type="checkbox" id="task-view" name="task_view" value="view task" checked>
                            <label for="vehicle1"> view task</label>
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