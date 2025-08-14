<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class='container'>
        <div class='table-container'>
            <form action="save.php" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="input-field">
                        <input type="file" name="csv" accept=".csv" required>
                        <input type="submit" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>