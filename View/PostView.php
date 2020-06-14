<?php $this->_title = $post->title(); ?>
<h1>Blog</h1>
<div>
    <h2><?= htmlspecialchars($post->Title());?></h2>
    <p><?= htmlspecialchars($post->Content());?></p>
</div>
<br>
<a href="index.php">Retour à l'accueil</a>
<div id="comments" class="text-left" style="margin-left: 50px">
    <h3>Commentaires</h3>
    <?php
    if(empty($comments) != TRUE){
        foreach ($comments as $comment)
        {
            ?>
            <h4><?= htmlspecialchars($comment->author());?></h4>
            <p><?= htmlspecialchars($comment->content());?></p>
            <?php
        }
    }
    ?>
    <br/>
    <p>Ecrire un commentaire : </p>
    <form method=post action='index.php'>
        <label for="author">Votre pseudo</label>
        <input type="text" name='author'>
        <textarea name="content" rows="10" cols="200"></textarea>
        <input type='hidden' name='idPost' value=<?=$post->id()?>>
        <input type="hidden" name='action' value='createComment' > 
        <input type="hidden" name='controller' value='comment'>
        <input type="submit" value="envoyer commentaire">
    </form>
</div>

