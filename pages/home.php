
<ul>
    <?php foreach ($db->query('SELECT * FROM articles', 'APP\Table\Article') as $post):?>


      <h2>
           <a href="<?= $post->url;?>"> <?= $post->id ?><?= $post->titre;?></a>
      </h2>

    <p><?= $post->extrait;?></p>


    <?php endforeach;?>
</ul>