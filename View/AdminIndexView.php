
<?php $this->_title = "Accueil Administration"; ?>

<h1>Administration</h1>
<?php
foreach ($posts as $post)
{
    ?>
    <div>
        <h2><a href="index.php?controller=post&amp;action=post&amp;id=<?=($post->id())?>"><?= htmlspecialchars($post->Title());?></a></h2>
        <p><?= htmlspecialchars($post->Content());?></p>
    </div>
    <br>
    <?php
}
?>