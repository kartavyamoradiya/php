<?php 
session_start();
include('controler/userCheck.php');
include('model/mainModel.php');
?>
<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task list page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script>
        function confirmDelete(url) {
            if (confirm("Are you sure you want to delete this task?")) {
                window.location.href = url;
            }
        }
    </script>
</head>
<body>
    <?php include('msg.php') ?>
    <div class="user-main-content">
        <div class="container card">
            <div class="form-group row user">
                <div class="card-header"><h5 class="mb-0">Task list</h5></div>
                <div class="add-user">
                    <div class="col-sm-10 card-body">
                        <input type="text" id="searchInput" class="form-control" placeholder="Search task" >
                    </div>
                    <div class="col-sm-2 card-body">
                        <a class="btn btn-primary " href="taskForm.php">Add Task</a>
                    </div>
                </div>
                <div class="added-user">
                    <div class="user-view">
                        <?php
                        //include('config/dbConnection.php');
                        $model = new MainModel;
                        $result = $model->getAllTask();
                         if ($result->num_rows > 0) {
                                echo "<table class='table'>";
                                echo "<thead><tr class='head'><th>Task name</th><th>Task Description</th><th>Create Date</th>
                                <th>End Date</th><th>Task Status</th><th>User name</th></tr></thead>";
                                echo "<tbody>";
                                while ($row = $result->fetch_assoc()) {
                                    $statusClass = '';
                                    if ($row['task_status'] == 'pending') {
                                        $statusClass = 'bg-warning';
                                    } elseif ($row['task_status'] == 'processing') {
                                        $statusClass = 'bg-info';
                                    } elseif ($row['task_status'] == 'completed') {
                                        $statusClass = 'bg-success';
                                    }
                                    echo "<tr>";
                                    echo "<td>" . $row['task_name'] . "</td>";
                                    echo "<td>" . $row['task_description'] . "</td>";
                                    echo "<td>" . $row['task_createdate'] . "</td>";
                                    echo "<td>" . $row['task_enddate'] . "</td>";
                                    echo "<td class='".$statusClass."'>" . $row['task_status'] . "</td>";
                                     echo "<td>" . $row['user_name'] . "</td>";
                                    echo "<td class='button'>
                                            <a href='edittaskForm.php?id=" . $row['task_id'] . "' class='btn btn-primary'>Edit</a>
                                            <a href='#' onclick='confirmDelete(\"deletetask.php?id=" . $row['task_id'] . "\")' class='btn btn-danger'>Delete</a>
                                        </td>";
                                    echo "</tr>";
                                }
                                 echo" <tr id='noRecordTR' style='display:none'>
                                <td colspan='6' class='text-center'>No Record Found</td>
                                </tr>";
                                echo "</tbody>";
                                echo "</table>";
                            } else {
                                echo "No products found.";
                        }   
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
        $('#searchInput').on('keyup', function() {
        var searchTerm = $(this).val().toLowerCase();
        var rows = $('table tbody tr');
        var visibleRows = 0;

        rows.each(function() {
            var rowText = $(this).text().toLowerCase();
            if (rowText.includes(searchTerm)) {
            $(this).show();
            visibleRows++;
            } else {
            $(this).hide();
            }
        });

        if (visibleRows === 0) {
            $('#noRecordTR').show();
        } else {
            $('#noRecordTR').hide();
        }
        });
        });
    </script>
</body>
</html>