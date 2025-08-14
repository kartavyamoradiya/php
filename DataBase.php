<?php
class DataBase {
    public $servername = "localhost";
    public $username = "root";
    public $password = "root";
    public $dbname = "CSV";
    public $conn;

    public function __construct() {

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function query($sql) {
        return $this->conn->query($sql);$db = new Database(); 
    }
}
?>
