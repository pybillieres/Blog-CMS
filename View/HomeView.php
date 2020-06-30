
<?php $this->_title = "Accueil"; ?>
<div class="container">
<?php
foreach ($posts as $post)
{
    ?>
    <div class="pb-5 mb-5">
        <h2 class="text-center"><a href="index.php?controller=post&amp;action=post&amp;id=<?=($post->id())?>"><?= htmlspecialchars($post->Title());?></a></h2>
        <p><?= $post->Content();?></p>
    </div>
    <br>
    <?php
}
?>
</div>
