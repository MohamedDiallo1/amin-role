<?php
class App{

    static $db = null;

    static function getDatabase(){
        if(!self::$db){
            self::$db = new Database('root', '', 'mohad');
        }
        return self::$db;
    }

    static function getAuth(){
        return new Auth(Session::getInstance(), ['restriction_msg' => "Vous n'avez pas accès à cette page car vous n'avez pas un espace! "]);
    }

    static function redirect($page){
        header("Location: $page");
        exit();
    }

}