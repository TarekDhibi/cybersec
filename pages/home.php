
<div class="roz">
<?php

$posts = get_posts();
foreach($posts as $post){
    ?>
        <div class="article-home">
            <div class="card">
                <div class="card-content">
                    <h1 class="grey-text text-darken-2"><?= substr(nl2br($post->title),0,40)?>...</h1>
                    <span class="grey-text">Publié le <?= date("d/m/Y à H:i",strtotime($post->date)); ?> par <?= $post->name ?></span>
                </div>
                <div class="card-image waves-effect waves-block waves-light">
                    <img src="img/posts/<?= $post->image ?>" class="activator" alt="<?= $post->title ?>"/>
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i class="material-icons right"></i></span>
                    <p><a class="btn light-blue waves-effect waves-light" href="article.php?page=post&id=<?= $post->id ?>">Voir l'article complet</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><?= $post->title ?> <i class="material-icons right"></i></span>
                    <p><?= substr(nl2br($post->content),0,1000); ?>...</p>
                </div>
            </div>
        </div>
    <?php
}

?>
</div>