<?php

class Dbh{

   protected function connect(){
    try{ 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "allusers";
        $conn = new mysqli($servername, $username, $password,$dbname);
        return $conn;
    }catch (PDOException $e){
        echo "Connection failed: " . $e->getMessage()."</pr>";
        die();
    }
   }

}
?>