<?php
namespace APP\Table;
use APP\App;
class Article extends Table{
    protected static $table = 'articles';

    public static function find($id){
        return self::query("
        SELECT articles.id, articles.titre, articles.contenu, categories.titre as categories 
        FROM articles 
        LEFT JOIN categories ON category_id = categories.id
        WHERE articles.id = ?
        ",[$id], true);

    }

    public  static function getLast(){
        return self::query("
        SELECT articles.id, articles.titre, articles.contenu, categories.titre as categories 
        FROM articles 
        LEFT JOIN categories ON category_id = categories.id
        ORDER BY articles.date DESC 
        ");
    }

    public function getUrl(){
        return 'index.php?p=article&id=' . $this->id ;
    }

    public function getExtrait(){
        $html = '<p>' . substr($this->contenu,0 , 100). '...</p>';
        $html .= '<p><a href="' . $this->getUrl() . '"> Voir la suite </a>';
        return $html;
    }
    public static function LastByCategory($category_id){
        return self::query("
        SELECT articles.id, articles.titre, articles.contenu, categories.titre as categories 
        FROM articles 
        LEFT JOIN categories ON category_id = categories.id
        ORDER BY articles.date DESC 
        ",[$category_id]);

    }
}