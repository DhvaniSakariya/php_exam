<?php

    class config{
        
    private $host = "127.0.0.1";
    private $username = "root";
    private $db_name = "php";
    private $password = "";
    private $conn;
    
    
    public function __construct() {

        $this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->db_name);

        if($this->conn) {
            echo "Connected !!";
        }
        else {
            echo "Not connected !!";
        }

    }

    public function insert($name,$age,$contact) {

        $query = "INSERT INTO $this->table_name(name,age,contact) VALUES('$name',$age,'$contact')";

        $res = mysqli_query($this->conn,$query);

        return $res;
    }
}
?>