<?php

include_once 'function/main.php';
include_once 'app/config/static.php';
include_once 'controllers/main.php';

// Auth
Router::url('login', 'get', 'AuthController::login');
Router::url('login', 'post', 'AuthController::sessionLogin');
Router::url('register', 'get', 'AuthController::register');
Router::url('register', 'post', 'AuthController::newRegister');
Router::url('logout', 'get', 'AuthController::logout');


// Dashboard
Router::url('dashboard', 'get', 'DashboardController::index');
Router::url('dashboard/add-contact', 'get', 'ContactController::addindex');
Router::url('dashboard/add-contact', 'post', 'ContactController::createContact');
Router::url('dashboard/edit-contact', 'get', 'ContactController::updateindex');
Router::url('dashboard/edit-contact', 'post', 'ContactController::updateContact');
Router::url('dashboard/delete-contact', 'get', 'ContactController::deleteContact');


Router::url('/', 'get', function () {
    header('Location: login');
});

new Router();