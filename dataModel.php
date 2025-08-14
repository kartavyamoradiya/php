<?php
class DataModel {
    public $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getContacts() {
        $sql = "SELECT * FROM `Csv_project`";
        return $this->db->query($sql);
    }
}
?>
