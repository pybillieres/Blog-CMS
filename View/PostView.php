<?php $this->_title = $post->title(); ?>
<h1>Blog</h1>
<div>
    <h2><?= htmlspecialchars($post->Title());?></h2>
    <p><?= $post->Content();?></p>
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


<!-- TinyMCE -->
<script type="text/javascript" src="content/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
  tinyMCE.init({
    // type de mode
    mode : "exact", 
    // id ou class, des textareas appelés
    elements : "commentaire1,commentaire2", 
    // en mode avancé, cela permet de choisir les plugins
    theme : "advanced", 
    // langue
    language : "fr", 
    // liste des plugins
    theme_advanced_toolbar_location : "top",
    theme_advanced_buttons1 : "bold,italic,underline,strikethrough,sup,forecolor,separator,"
    + "justifyleft,justifycenter,justifyright,justifyfull,formatselect,"
    + "bullist,numlist,outdent,indent,separator,cleanup,|,undo,redo,|,",
    theme_advanced_buttons2 : "",
    theme_advanced_buttons3 : "",
    height:"250px",
    width:"600px"
  });
</script>
