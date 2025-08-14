<?php
session_start();
include('config/dbConnection.php');

?>
<!DOCTYPE html>
<html lang="hi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User task list</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
$sql = "SELECT * FROM task_list WHERE user_id = '".$_SESSION['user']['user_id']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table'>";
    echo "<thead><tr class='head'><th>Task name</th><th>Task Description</th><th>Create Date</th><th>End Date</th><th>Task Status</th></tr></thead>";
    echo "<tbody>";
    while($row = $result->fetch_assoc()) {
        $statusClass = '';
        if ($row['task_status'] == 'pending') {
            $statusClass = 'bg-warning';
        } elseif ($row['task_status'] == 'processing') {
            $statusClass = 'bg-info';
        } elseif ($row['task_status'] == 'complete') {
            $statusClass = 'bg-success';
        }
        echo "<tr>";
        echo "<td>" . $row['task_name'] . "</td>";
        echo "<td>" . $row['task_description'] . "</td>";
        echo "<td>" . $row['task_createdate'] . "</td>";
        echo "<td>" . $row['task_enddate'] . "</td>";
        echo "<td class='" . $statusClass . "'>" . $row['task_status'] . "</td>";
        echo "<td class='button'>
                <a href='editusertask.php?id=" . $row['task_id'] . "' class='btn btn-primary'>Edit</a>
                <a href='logout.php' class='btn btn-danger'>Logout</a>
              </td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>No tasks found.</p>";
}
?>
</body>
</html>
