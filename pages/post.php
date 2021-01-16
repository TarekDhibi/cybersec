
<?php

$post = get_post();
if($post == false){
    header("Location:article.php?page=error");
}else{
    ?>
    
   
        <div class="container">
		 <div class="image-post">
            <img src="img/posts/<?= $post->image ?>" alt="<?= $post->title ?>"/>
        </div>
                <br><br><br> 
            <h2 class="titlepost"><?= $post->title ?></h2><br><br><br>
            <h3>Publié par <?= $post->name ?>  le <?= date("d/m/Y à H:i", strtotime($post->date)) ?></h3>
            <p class="articletext"><?= nl2br($post->content); ?></p>
    <?php
}
?>
                <br><br><br>
            <hr>
            <h4 style="font-size: 20px" >Commentaires:</h4>
            <?php
                $responses = get_comments();
                if($responses != false){
                    foreach($responses as $response){
                        ?>
                            <blockquote>
                                <strong><?= $response->name ?> (<?= date("d/m/Y", strtotime($response->date)) ?>)</strong>
                                <p><?= nl2br($response->comment); ?></p>
                            </blockquote>
                        <?php
                    }
                }else echo "Aucun commentaire n'a été publié... Soyez le premier!";
            ?>

            <h4 style="font-size: 20px">Commenter:</h4>

            <?php
                if(isset($_POST['submit'])){
                    $name = htmlspecialchars(trim($_POST['name']));
                    $email = htmlspecialchars(trim($_POST['email']));
                    $comment = htmlspecialchars(trim($_POST['comment']));
                    $errors = [];

                    if(empty($name) || empty($email) || empty($comment)){
                        $errors['empty'] = "Tous les champs n'ont pas été remplis";
                    }else{
                        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                            $errors['email'] = "L'adresse email n'est pas valide";
                        }
                    }


                    if(!empty($errors)){
                        ?>
                            <div class="card red">
                                <div class="card-content white-text">
                                    <?php
                                        foreach($errors as $error){
                                            echo $error."<br/>";
                                        }
                                    ?>
                                </div>
                            </div>
                        <?php
                    }else{
                        comment($name,$email,$comment);
                        ?>
                            <script>
                                window.location.replace("article.php?page=post&id=<?= $_GET['id'] ?>");
                            </script>
                        <?php
                    }

                }

            ?>

            <form method="post">
                <div class="roz">
                    <div class="input-field coz s12 m6">
                        <input type="text" name="name" id="name"/>
                        <label for="name">Nom</label>
                    </div>
                    <div class="input-field coz s12 m6">
                        <input type="email" name="email" id="email"/>
                        <label for="email">Adresse email</label>
                    </div>
                    <div class="input-field coz s12">
                        <textarea name="comment" id="comment" class="materialize-textarea"></textarea>
                        <label for="comment">Commentaire</label>
                    </div>

                    <div class="coz s12">
                        <button type="submit" name="submit" class="btn waves-effect">
                            Commenter ce post
                        </button>
                    </div>
                </div>
            </form>