<div class="row">
    <div class="col-sm-8">
        <ul>
            <?php foreach (\APP\Table\Article::getLast() as $post):?>

                <h2><a href="<?= $post->url;?>"> <?= $post->id ?>) <?= $post->titre;?> </a></h2>
                <p><em><?= $post->categories;?></em></p>

                <p><?= $post->extrait;?></p>


            <?php endforeach;?>
        </ul>
    </div>
    <div class="col-sm-4">
        <ul>
        <?php foreach (\APP\Table\Categorie::all()  as $categorie):?>
        <li><a href="<?= $categorie->url;?>"><?= $categorie->titre ;?></a> </li>
        <?php endforeach;?>
        </ul>
    </div>
</div>