
<?php $this->_title = "Accueil"; ?>

<h1>Blog</h1>
<a href="index.php?action=connection">connexion</a>
<?php
foreach ($posts as $post)
{
    ?>
    <div>
        <h2><a href="index.php?action=post&amp;id=<?=($post->id())?>"><?= htmlspecialchars($post->Title());?></a></h2>
        <p><?= htmlspecialchars($post->Content());?></p>
    </div>
    <br>
    <?php
}
?>