  
<?php

class database 
{
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "testing";

    private $mysqli = "";
    private $result = array ();
    private $conn = false;
 
    public function __construct()
    {
        if(!$this->conn){
            $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            $this->conn = true;
            if($this->mysqli->connect_error){
                array_push($this->result,$this->mysqli->connect_error);
                return false ;

            }
        } else {
            return true ;
        }
    }
    public function insert($table,$para=array())
    {
        $table_key=implode(', ',array_keys($para));
        $table_val=implode("','",array_values($para));
     
      $insert= "INSERT INTO $table ($table_key) VALUES ('$table_val')" ;
      if($this->mysqli->query($insert)){
        array_push($this->result,$this->mysqli->insert_id);
        return true;
      } else{
           array_push($this->result,$this->mysqli->error);
           return false ;
      }
      
    
    }
    public function update($table,$para=array(),$where=null)
    {
        
    }
    public function delete()
    {
        
    }
    public function select()
    {
        
    }
    public function __destruct()
    {
        if($this->conn){
            if($this->mysqli->close()){
                $this->conn= false ;
                return true;
            }
        } else {
            return false ;
        }
    }
}



?>