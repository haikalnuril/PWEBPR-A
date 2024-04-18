<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Peserta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    class Contact{
        static function insert(){
            require_once __DIR__ . '/../app/models/database.php';
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
    }

    Contact::insert()
    ?>
    <h2>Input Data</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>User_id:</label>
            <input type="text" name="user_id" class="form-control" placeholder="User Id" required />

        </div>
        <div class="form-group">
            <label>Owner:</label>
            <input type="text" name="owner" class="form-control" placeholder="Owner name" required/>
        </div>
        <div class="form-group">
            <label>No HP:</label>
            <input type="text" name="no_hp" class="form-control" placeholder="Your No HP" required/>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <textarea name="email" class="form-control" rows="5"placeholder="Email@example.com" required></textarea>
        </div>       

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>