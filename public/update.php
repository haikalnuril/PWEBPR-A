<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Anggota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

</head>
<body style="background-color: #BAFCA2;">
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
    <div class="mt-5 bg-[#FAAB36] px-3 py-3 rounded-xl border-black border-l-2 border-t-2 border-b-8 border-r-8">
        <h2 class="font-medium text-4xl">Update Data</h2>


        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-group mt-3">
                <label>User_id :</label>
                <input type="text" name="user_id" class="w-full border-4 rounded-lg" placeholder="User Id" required />

            </div>
            <div class="form-group">
                <label>Owner :</label>
                <input type="text" name="owner" class="w-full border-4 rounded-lg" placeholder="Owner name" required/>
            </div>
            <div class="form-group">
                <label>No HP :</label>
                <input type="text" name="no_hp" class="w-full border-4 rounded-lg" placeholder="Your No HP" required/>
            </div>
            <div class="form-group">
                <label>Email :</label>
                <textarea name="email" class="w-full border-black border-2 rounded-xl" rows="5"placeholder="Email@example.com" required></textarea>
            </div> 

            <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />

            <button type="submit" name="submit" class="w-full px-3 py-2 bg-purple-400 rounded-xl border-black border-l-2 border-t-2 border-b-8 border-r-8 font-bold">Update</button>
        </form>
    </div>
</div>
</body>
</html>