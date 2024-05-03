<?php

var_dump($_SERVER['REQUEST_URI']);
$url = $_SERVER['REQUEST_URI'];

switch($url){
    case '/dashboard':
        include '/public/dashboard.php';
        break;
    case 'login':
        include 'public/login.php';
        break;
    case 'register':
        include 'public/register.php';
        break;
    case 'create':
        include 'public/create.php';
        break;
    case 'update':
        include 'public/update.php';
        break;
    default:
        echo '<h1>SUCCESS</h1>';
}