<?php
namespace APP\table;
use APP\App;

class Categorie extends Table{
    protected static $table ='categories';
    public function getUrl()
    {
        return 'index.php?p=categorie&id=' . $this->id;
    }



}