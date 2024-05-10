<?php $title = 'Dashboard'; ?>

<?php
ob_start();
include 'public/css/style.css';
$style = ob_get_clean();
?>

<?php ob_start(); ?>
<?php
if (isset($url)) {
    include $url . '.php';
}
?>

<?php $body = ob_get_clean();
?>

<?php include 'public/master.php'; ?>

