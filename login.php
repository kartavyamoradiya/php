<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.php</title>
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
                    <form action="controler/loginCheck.php" method="POST">
                        <div class="heading mb-3">
                            <h5>Task manager login</h5>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Username</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="main_username" placeholder="mainuser name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Password</label>
                            <div class="col-sm-12">
                                <input type="password" class="form-control" name="main_password" placeholder="password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Choose person</label>
                            <div class="col-sm-8">
                                <select name="person" id="person">
                                    <option value="">choes person</option>
                                    <option value="admin">admin</option>
                                    <option value="user">user</option>
                                </select>
                            </div>
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