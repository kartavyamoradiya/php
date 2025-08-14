<?php
include('DataBase.php');
public function Fileupload($_FILES) {
   
    $file_name = $_FILES['csv']['name'];
    $file_size = $_FILES['csv']['size'];
    $file_tmp = $_FILES['csv']['tmp_name'];
    $file_type = $_FILES['csv']['type'];

    $filePath = "/var/www/html/uploads/" . $file_name;


    if (move_uploaded_file($file_tmp, $filePath)) {
        echo "File successfully uploaded.<br>";


}
?>