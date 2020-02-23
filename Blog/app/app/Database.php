<?php
namespace APP;;
use \PDO;
class Database{
    const PORT =3307;
    private $db_name;
    private $db_user;
    private $db_pass;
    private $pdo;
    public function __construct($db_name,$db_user='root',$db_pass='root'){
        $this->db_name=$db_name;
        $this->db_user=$db_user;
        $this->db_pass=$db_pass;
    }

    private function getPDO(){
        $pdo = new PDO('mysql:host=localhost:'. self::PORT.';dbname='. $this->db_name, ''. $this->db_user .'', '' . $this->db_pass .'');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
        return $this->pdo;
    }

    public function query($statement){
        $rec = $this->getPDO()->query($statement);
        $data= $rec->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
}