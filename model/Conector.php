<?php
class  Conector{
    private $hostname="localhost";
    private $user ="root";
    private $password="";
    private $db_name="farmacia";
    private $char_set="utf8";
    private $connection;
    private $query;
    private $response = array();
    private static $instance

    private function __construct(){
        $this->$connection = new mysqli($this->$hostname, $this->$user, $this->$password, $this->$db_name);
        $this->$connection->set_charset($this->$char_set);
    }
    public static function getInstance(){
       if(!self::$instance){
           self::$instance = new self();
       }
       return self::$instance;
    }

    private function db_close(){
        $this->$connection->close();
    }
    public function get_query(){
    
        $result = $this->$connection->query($this->$query);
        while($this->$response[] = $result->fetch_assoc());

        $result->close();
        $this->db_close();
        return array_pop($this->$response);
    }
    public function queryDB($queryDB = "")
    {
       $this->$query = $queryDB;
    }
}


?>