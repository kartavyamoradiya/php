<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>event Form</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <form action="show.php" method="POST" id="event_form">
        <div class="container">
            <div class="input-field">
            <label class="col-sm-2 col-form-label">Event-id</label>
                <select class="custom-select custom-select-sm" name="event_id" >
                <option value="" selected disabled>Choose Event_id</option>
                    <?php
                        include('con.php');
                        $sql = "SELECT * FROM event_db";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value=" . $row['id'] . ">" . $row['title']. "</option>";
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="input-field">
            <label class="col-sm-2 col-form-label">Date-id</label>
                <select class="custom-select custom-select-sm" name="date_id" >
                <option value="" selected disabled>Choose Date_id</option>
                    <?php
                        include('con.php');
                        $sql = "SELECT * FROM date";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value=" . $row['date_id'] . ">" . $row['date_title']. "</option>";
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="input-field">
                <label for="start">Start Date:</label>
                <input type="date" id="s_date" name="start_date">
            </div>
            <div class="input-field">
                <label for="end">End Date:</label>
                <input type="date" id="e_date" name="end_date">
            </div>
            <div class="input-field button">
            <input class="btn btn-primary" type="submit" name="contact_form" value="Submit Form">
            </div>
        </div>
    </form>
</body>
</html>