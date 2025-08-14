<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include('DataBase.php');
    $db = new DataBase(); 

    if (isset($_GET['city'])) {
        $city = strtolower(trim($_GET['city'])); //trim use white space door karva , strtolower lower case mate 
    }
    $sql = "SELECT * FROM `Csv_project` WHERE city LIKE '%$city%'";
    $result = $db->conn->query($sql);
    ?>
    <div class='container'>
    <form method='GET' action=''>
    <input type='text' name='city' placeholder='Enter city name' class='form-control' />
   <button type='submit' class='btn mb-3'>serch</button>
   </form>
    <?php
    if ($result->num_rows > 0) {
        echo "<div class='table-container'>";
        echo "<table class='table table-bordered'>";
        echo "<thead><tr><th> Name</th><th>Age</th><th>City</th></tr></thead>";
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['firstname']  . "</td>";
            echo "<td>" . $row['age']  . "</td>";
            echo "<td>" . $row['city']  . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    } else {
        echo "<div class='table-container text-center'><p><strong>No data found</strong></p></div>";
    }

    echo "</div>";
    $conn->close();
    ?>
</body>

</html>