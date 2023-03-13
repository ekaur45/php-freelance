<?php
include_once "../config/app.php";
class DataBase{
    private $host;
    private $username;
    private $password;
    private $db;
    private $conn;
    public function __construct() {
        global $_CONFIG;
        $this->host = $_CONFIG->DATABASE->HOST;
        $this->username = $_CONFIG->DATABASE->USERNAME;
        $this->password = $_CONFIG->DATABASE->PASSWORD;
        $this->db = $_CONFIG->DATABASE->DB;
        $this->conn = mysqli_connect(
            $this->host,
            $this->username,
            $this->password,
            $this->db
        );
    }
    public function __execute($sql){
        $result = $this->conn->query($sql);
        return $result === TRUE;
    }
    public function __select($sql){
        $result = $this->conn->query($sql);
        if($result&&$result->num_rows>0){
            $data =[];
            while ($rows = $result->fetch_assoc()) {
                $data = $rows;
            }
            return $data;
        }
        return [];
    }
    public function __selectSingle($sql){
        $result = $this->conn->query($sql);
        if($result&&$result->num_rows>0){
            return $result->fetch_assoc();
        }
        return null;
    }
}

$db = new DataBase;