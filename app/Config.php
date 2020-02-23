<?php


namespace App;


class Config{

    protected $setting= [];
    private static $_instance;

    public static function getInstance(){
        if(is_null(self::$_instance)){
            return new Config();
        }
        return self::$_instance;
    }

    public function  __construct(){
        $this->id = uniqid();
        $this->setting=require dirname(__DIR__) . '/config/config.php';
    }

}