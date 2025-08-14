<?php
include('DataBase.php'); 

class CsvUpload {
    private $file;
    private $filePath;
    private $conn;

    
    public function __construct($file, $conn) {
        $this->file = $file;
        $this->conn = $conn;
        $this->filePath = "/var/www/html/uploads/" . $this->file['name'];
    }

    
    public function uploadFile() {
        if (move_uploaded_file($this->file['tmp_name'], $this->filePath)) {
            echo "File successfully uploaded.<br>";
            return true;
        } else {
            echo "Error: Could not upload the file.<br>";
            return false;
        }
    }

    public function insertDataFromCsv() {
        if (($file = fopen($this->filePath, "r")) !== false) {
            while (($data = fgetcsv($file)) !== false) {
                $name = $data[0];
                $age = $data[1];
                $city = $data[2];

                $sql = "INSERT INTO `Csv_project` (`firstname`, `age`, `city`, `file_upload`) 
                        VALUES ('" . $name . "', '" . $age . "', '" . $city . "', '" . $this->filePath . "')";

                if (!$this->conn->query($sql)) {
                    echo "Error: " . $this->conn->error . "<br>";
                    return false;
                }
            }
            fclose($file);
            echo "Data inserted successfully.<br>";
            return true;
        } else {
            echo "Error: Could not read the uploaded file.<br>";
            return false;
        }
    }
}
?>
