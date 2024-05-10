<?php
include_once 'app/models/contact.php';

class ContactController
{
    static function addindex(){
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else{
            view('dashboard/layout', ['url'=> 'create']);
        }
    }
    static function updateindex(){
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else{
            view('dashboard/layout', ['url'=> 'update', 'contact'=> Contact::find($_GET['id'])]);
        }
    }
    static function createContact()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::insert(
                $_SESSION['user']['id'],
                $post['owner'],
                $post['no_hp'],
                $post['email'],
            );

            if ($contact) {
                header('Location: ' . BASEURL . 'dashboard');
            } else {
                echo ('Terjadi kesalahan');
            }
        }
    }

    static function updateContact()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'login?auth=false');
            exit;
        } else {
            $post = array_map('htmlspecialchars', $_POST);
            $contact = Contact::update(
                $_GET['id'],
                $post['owner'],
                 $post['no_hp'],
                 $post['email'],
            );
            if ($contact) {
                header('Location: ' . BASEURL . 'dashboard');
            } else {
                echo ('Terjadi kesalahan');
            }
        }
    }

    static function deleteContact()
    {
        $post = array_map('htmlspecialchars', $_POST);
        $id = $_GET['id'];
        $contact = Contact::delete($id);
        if($contact){
            header('Location: ' . BASEURL . 'dashboard');
        } else {
            echo ('Terjadi kesalahan');
        }
    }
}