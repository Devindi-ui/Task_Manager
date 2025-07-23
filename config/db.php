<?php
//Database configurations
class Database{
    private $host = "localhost";
    private $dbname = "task_manager";
    private $user = "root";
    private $password = "P2003";
    public $conn;

    public function getConnection() {
        $this -> conn = null;
        try{
            $this -> conn = new PDO(
                "mysql:host".$this->host. ";dbname=".$this->dbname,
                $this->user,
                $this->password,
            );
            $this->conn->exec("set names utf8"); //encoding in my sql
        }catch(PDOException $e){
            echo "Connection Error: ". $e->getMessage();
        }
        return $this->conn;
    }
}

