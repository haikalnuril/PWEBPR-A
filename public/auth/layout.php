<?php

$title = 'login';
?>

<?php
ob_start();
include '../css/style.css';
$style = ob_get_clean();
?>

<?php
if(isset($_GET['auth'])){
    echo '<script>alert("silahkan login")</script>';
}
if(isset($_GET['failed'])){
    echo '<script>alert("login gagal")</script>';
}
if(isset($url)){
    include_once $url . '.php';
}
?>
<?php
include 'public/master.php';
?>

