<?php

include_once 'app/models/contact.php';

class DashboardController {
    static function index() {
        if (!isset($_SESSION['user'])) {
            header('Location: '.BASEURL.'login?auth=false');
            exit;
        }
        else {
            view('dashboard/layout', ['url' => 'dashboard' ,'contacts' => Contact::select($_SESSION['user']['id'])]);
        }
    }
}