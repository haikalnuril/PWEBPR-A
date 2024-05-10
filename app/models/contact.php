<?php

include_once 'app/config/conn.php';

Class Contact{ 
    static function select(){
        global $conn;
        $sql = "SELECT * FROM laporan";
        $result = $conn->query($sql);
        $arr = [];

        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()){
                $arr[] = $row;
            }
        }
        return $arr;
    }
    static function update(){
        //ada di dalam file update.php
    }
    static function insert(){
        global $conn;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
            $user_id=input($_POST["user_id"]);
            $owner=input($_POST["owner"]);
            $no_hp=input($_POST["no_hp"]);
            $email=input($_POST["email"]);
    
            $sql="insert into laporan (user_id,owner,no_hp,email) values
            ('$user_id','$owner','$no_hp','$email')";

            $hasil=mysqli_query($conn,$sql);
    

            if ($hasil) {
                header("Location:index.php");
            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    
            }
    
        }
        
    }

    static function delete(){
        global $conn;
        if (isset($_GET['id'])) {
            $id=htmlspecialchars($_GET["id"]);
      
            $sql="delete from laporan where id='$id' ";
            $hasil=mysqli_query($conn,$sql);
      
            //Kondisi apakah berhasil atau tidak
                if ($hasil) {
                    header("Location:index.php");
      
                }
                else {
                    echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
      
                }
            }
        
    }
  }


?>