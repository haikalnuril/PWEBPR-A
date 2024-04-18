<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Anggota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <?php




    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_GET['id'])) {
        require_once __DIR__ . '/../app/models/database.php';
        $id=input($_GET["id"]);

        $sql="select * from laporan where id=$id";
        $hasil=mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($hasil);


    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once __DIR__ . '/../app/models/database.php';
        $id=htmlspecialchars($_POST["id"]);
        $user_id=input($_POST["user_id"]);
        $owner=input($_POST["owner"]);
        $no_hp=input($_POST["no_hp"]);
        $email=input($_POST["email"]);


        $sql="update laporan set
			user_id='$user_id',
			owner='$owner',
			no_hp='$no_hp',
			email='$email'
			where id=$id";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($conn,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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

        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>