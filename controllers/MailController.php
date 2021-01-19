<?php
class MailController{

    public function  __construct(){

    }

    public function run(){
        if (!empty($_POST)) {
            $message = $_POST['email'];
            $msg = $this->checkChamps($_POST['email']);

            #require_once la vue de la page
        }
        require_once(CHEMIN_VUES . 'mail.php');
    }

    public function checkChamps(String $str):String {
        if(empty($str)) return "Champs vide";
        if(strpos($str,"@")===false) return "@ non présent";
    }




}
