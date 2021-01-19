<?php
class MailController{

    public function  __construct(){

    }

    public function run(){


        #require_once la vue de la page
        require_once(CHEMIN_VUES . 'mail.php');
    }

    public function checkChamps(String $str):String {
        if(empty($str)) return "Champs vide";
    }




}
