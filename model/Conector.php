<?php




      $hostname="localhost";
      $user ="root";
      $password="";
      $db_name="farmacia";
      $char_set="utf8";
      
      
      $connection = mysqli_connect($hostname,$user, $password, $db_name);
      $connection->set_charset($char_set);

      /*if($connection){

        echo "Conexxion exitosa";
      }  
      /*
    public static function getInstance(){
       if(!self::$instance){
           self::$instance = new self();
       }
       return self::$instance;
    }

    private  function db_close(){
        $this->$connection->close();
    }
    
    public function get_query($query){
        open_db();
        $result = $this->$connection->query($query);
        while($this->$response[] = $result->fetch_assoc());

        $result->close();
        $this->db_close();
        return array_pop($this->$response);
    }   
}
*/
?>