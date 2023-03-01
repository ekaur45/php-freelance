<?php
class DataBase{
    private $host ="localhost";
    private $username = "root";
    private $password = "test123";
    private $db = "test";
    private $conn;
    public function __construct() {
        
        $this->conn = mysqli_connect(
            $this->host,
            $this->username,
            $this->password,
            $this->db
        );
    }
    public function execute($sql){
        $result = $this->conn->query($sql);
        return $result === TRUE;
    }
    public function select($sql){
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
}

$db = new DataBase;