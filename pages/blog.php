
<?php
   global $db;

    $req = $db->query("
        SELECT  posts.id,
                posts.title,
                posts.image,
                posts.date,
                posts.content,
                admins.name
        FROM posts
        JOIN admins
        ON posts.writer=admins.email
        WHERE posted='1'
        ORDER BY date DESC

    ");

    $results = array();

    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }



$posts = $results;
foreach($posts as $post){
    ?>
    <div   class="container">
        <div >
            <h4 class="titlepost"><?= $post->title ?></h4>

            <div class="roz">
                <div class="coz s12 m6 l8">
                    <?= substr(nl2br($post->content),0,900) ?>...
                </div>
                <div class="coz s12 m6 l4">
                    <img src="img/posts/<?= $post->image ?>" class="materialboxed responsive-img" alt="<?= $post->title ?>"/>
                    <br/><br/>
                    <a class="btn light-blue waves-effect waves-light" href="article.php?page=post&id=<?= $post->id ?>">Lire l'article complet</a>
                </div>
            </div>
        </div>
    </div>
   <div class="now_page">
           
          </div>
    <?php
}
