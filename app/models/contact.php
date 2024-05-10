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
    static function find($id){
        global $conn;
        $sql = "SELECT * FROM laporan WHERE id = $id";
        // $stmt = $conn -> prepare($sql);
        // $stmt->bind_param('i', $id);
        // $stmt->execute();
        
        $result = $conn -> query($sql);
        $arr = [];

        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()){
                $arr[] = $row;
            }
        }
        return $arr;
    }
    static function update($id, $owner, $no_hp, $email){
        global $conn; // Access the $conn variable from the global scope

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sql = "UPDATE laporan SET owner = '$owner', no_hp = '$no_hp', email = '$email' WHERE id = $id";

            $hasil = mysqli_query($conn, $sql);

            if ($hasil) {
                header("Location:" . BASEURL . "dashboard");
                exit(); // Terminate the script after redirecting
            } else {
                echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
            }
        }
    }
    static function insert($user_id, $owner, $no_hp, $email){
        global $conn; // Access the $conn variable from the global scope

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sql = "INSERT INTO laporan (user_id, owner, no_hp, email) VALUES ('$user_id', '$owner', '$no_hp', '$email')";

            $hasil = mysqli_query($conn, $sql);

            if ($hasil) {
                header("Location:" . BASEURL . "dashboard");
                exit(); // Terminate the script after redirecting
            } else {
                echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
            }
        }
        
    }

    static function delete($id){
        global $conn;
        $sql = "DELETE FROM laporan WHERE id = $id";
        $hasil = mysqli_query($conn, $sql);

        if ($hasil) {
            header("Location:" . BASEURL . "dashboard");
            exit(); // Terminate the script after redirecting
        } else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
        }
        
    }
  }


?>