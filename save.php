<?php
include('DataBase.php');

if (isset($_FILES['csv'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $file_name = $_FILES['csv']['name'];
    $file_size = $_FILES['csv']['size'];
    $file_tmp = $_FILES['csv']['tmp_name'];
    $file_type = $_FILES['csv']['type'];

    $filePath = "/var/www/html/uploads/" . $file_name;


    if (move_uploaded_file($file_tmp, $filePath)) {
        echo "File successfully uploaded.<br>";


        if (($file = fopen($filePath, "r")) !== false) {
            while (($data = fgetcsv($file)) !== false) {
                //echo "<pre>";
                //print_r($data);
                $name = $data[0];
                $age = $data[1];
                $city = $data[2];

                $sql = "INSERT INTO `Csv_project` (`firstname`, `age`, `city`, `file_upload`) 
                        VALUES ('" . $name . "', '" . $age . "', '" . $city . "', '" . $filePath . "')";


                if (!$conn->query($sql)) {
                    echo "Error: " . $conn->error . "<br>";
                }
            }
            fclose($file);
            echo "Data inserted successfully.";
            header("Location: printData.php");
            exit();
        } else {
            echo "Error: Could not read the uploaded file.";
        }
    } else {
        echo "Error: Could not upload the file.";
    }
} else {
    echo "Error: No file uploaded.";
}

$conn->close();
?>