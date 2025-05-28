<?php
class DBConnection {
    public $conn;
    function __construct() {
        $this->conn = new mysqli('db', 'root', '', 'tourism_db');
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
