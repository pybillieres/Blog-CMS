
<?php $this->_title = "Accueil"; ?>

<h1>Blog</h1>
<a href="index.php?controller=connection">connexion</a>
<?php
foreach ($posts as $post)
{
    ?>
    <div>
        <h2><a href="index.php?controller=post&amp;action=post&amp;id=<?=($post->id())?>"><?= htmlspecialchars($post->Title());?></a></h2>
        <p><?= ($post->Content());?></p>
    </div>
    <br>
    <?php
}
?>