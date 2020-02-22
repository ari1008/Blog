<?php
use \APP\Table\Categorie;
use \APP\Table\Article;
use APP\App;
$categorie = Categorie::find($_GET['id']);
if($categorie === false){
    App::notFound();
}
$articles =  Article::LastByCategory($_GET['id']);
$categories = Categorie::all();
?>
<h1><?=$categorie->titre;?></h1>
<div class="row">
    <div class="col-sm-8">
        <ul>
            <?php foreach ($articles as $post):?>

                <h2><a href="<?= $post->url;?>"> <?= $post->id ?><?= $post->titre;?> </a></h2>
                <p><em><?= $post->categories;?></em></p>

                <p><?= $post->extrait;?></p>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="col-sm-4">
        <ul>
            <?php foreach ($categories  as $categorie):?>
                <li><a href="<?= $categorie->url ;?>"><?= $categorie->titre ;?></a> </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>