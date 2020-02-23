<?php
namespace App;

class App{

    public  $title="Mon Blog";
    private static $_instance;

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }
    public static function getTable($name){
        $class_name = 'App\\Table\\' . ucfirst($name) . 'Table';
        var_dump($class_name);
        return new $class_name();
    }

}