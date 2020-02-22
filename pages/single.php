<?php ;
use APP\App;
use APP\Table\Article;
use APP\table\Categorie;

$post = Article::find($_GET['id']);
if($post === null){
  self::notFound();
}

App::setTitle($post->titre);
?>
<h1><?= $post->titre  ;?></h1>

<p><em><?= $post->categories;?></em></p>
<p><?= $post->contenu; ?></p>