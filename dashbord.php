<?php session_start();
include('controler/userCheck.php');

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
    <header class="main-header card">
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
            <ul class="navbar-nav navbar-nav-scroll col-12">
                <li class="nav-item col-6">
                    <a class="nav-link" href="task.php">task menu</a>
                </li>
                <li class="nav-item col-6">
                    <a class="nav-link " href="user.php">user menu</a>
                </li>
            </ul>
        </nav>
    </header>
</body>
</html>