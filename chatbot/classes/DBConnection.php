<?php
if(!defined('DB_SERVER')){
    require_once("../initialize.php");
}
class DBConnection{
   // $conn = new mysqli('3.109.14.4', 'ostechnix', 'Password123#@!', 'candidate_portal');
    private $host = "3.109.14.4";
    private $username = "ostechnix";
    private $password = "Password123#@!";
    private $database = "candidate_portal";
    
    public $conn;
    
    public function __construct(){

        if (!isset($this->conn)) {
            
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            
            if (!$this->conn) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
    }
    public function __destruct(){
        $this->conn->close();
    }
}
?>