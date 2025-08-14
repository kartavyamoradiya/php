<?php
 session_start();
include('config/dbConnection.php');

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
    <title>Task manager</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php include('msg.php') ?>
    <div class="login-main-content">
        <div class="container">
            <div class="login-content card ">
                <div class="card-body">
                    <form action="controler/userloginCheck.php" method="POST">
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Username</label>
                            <div class="col-sm-12">
                                <input type="hidden" name="user_id" value="<?php echo $user['user_id']; ?>">
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Password</label>
                            <div class="col-sm-12">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-6 col-form-label">Choose person</label>
                            <div class="col-sm-6">
                                <select name="person" id="person">
                                    <option value="">Choose person</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row checkbox">
                            <input type="checkbox" id="task-view" name="task-view" value="view task" checked>
                            <label for="task-view">View task</label>
                        </div>
                        <div class="input-field">
                            <input class="btn btn-primary" type="submit" value="Login" name="login" />
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>
</body>
</html>