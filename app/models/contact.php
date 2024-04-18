<?php
require_once 'database.php';

Class Contact{ 
    static function select(){
        global $conn;
        $sql = "SELECT * FROM laporan";
        $result = $conn->query($sql);
        $arr = array();

        if($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                foreach ($row as $key => $value){
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
    static function insert(){
  
    }
    static function update(){
  
    }
    static function delete(){
  
    }
  }


?>