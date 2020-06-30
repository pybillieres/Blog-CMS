
<?php $this->_title = "Accueil Administration"; ?>

<h1 class="text-center">Administration</h1>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top ">
      <ul class="navbar-nav flex-column-sm ">
        <li class="nav-item navbar-left"><a class="nav-link" href='index.php?controller=user&amp;action=changePassword'>Modifier Password</a></li>
        <li class="nav-item navbar-right"><a class="nav-link" href="index.php?controller=post&amp;action=createPost">Créer nouveau post</a></li>
        <li class="nav-item navbar-right"><a class="nav-link" href='index?controller=comment&amp;action=moderateComments'>Modération commentaires</a></li>  
        <li class="nav-item navbar-right"><a class="nav-link" href='index?controller=connection&amp;action=logout'>Déconnexion</a></li>  
    </ul>
    </nav>

<?php
foreach ($posts as $post)
{
    ?>
    <div class="bg-light p-3 rounded">
        <h2><a href="index.php?controller=post&amp;action=post&amp;id=<?=($post->id())?>" class="text-dark"><?= htmlspecialchars($post->Title());?></a></h2>
        <a href="index.php?controller=post&amp;action=editPost&amp;id=<?=($post->id())?>" class="btn btn-info mr-2">Modifier</a>
        <a href="index.php?controller=post&amp;action=deletePost&amp;id=<?=($post->id())?>&amp;title=<?=($post->title())?>" class="btn btn-info">Supprimer</a>
    </div>
    <br>
    <?php
}
?>