<?php
class MainModel {
    public $connection = NULL;

    public function __construct() {
        $this->connection = new mysqli("localhost", "root", "root", "task_manager");
        if (!$this->connection) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getDbConnection()
    {
        return $this->connection;
    }

    public function getAllTask()
    {
        $result = $this->connection->query("SELECT t.task_id, t.task_name, t.task_description, t.task_createdate, t.task_enddate, t.task_status, u.user_name 
                       FROM task_list t
                       INNER JOIN user_login u ON t.user_id = u.user_id");
        return $result;
    }

    public function getAllUser()
    {
        $result = $this->connection->query("SELECT * FROM user_login");
        
        return $result;

    }
}