<?php $this->_title = "Modération commentaires"; ?>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top ">
      <ul class="navbar-nav flex-column-sm ">
        <li class="nav-item navbar-left"><a class="nav-link" href='index.php?controller=user&amp;action=changePassword'>Modifier Password</a></li>
        <li class="nav-item navbar-right"><a class="nav-link" href="index.php?controller=post&amp;action=createPost">Créer nouveau post</a></li>
        <li class="nav-item navbar-right"><a class="nav-link" href='index?controller=comment&amp;action=moderateComments'>Modération commentaires</a></li>  
        <li class="nav-item navbar-right"><a class="nav-link" href='index?controller=connection&amp;action=logout'>Déconnexion</a></li>  
    </ul>
    </nav>


<h1 class="text-center">Modération des commentaires</h1>
<a href='index.php?controller=connection' class="btn btn-primary">Retourner à la page d'administration</a>
<?php
    if (empty($comments) != TRUE) {
        foreach ($comments as $comment) {
    ?>
            <h4 class="mt-5"><?= htmlspecialchars($comment->author()); ?></h4>
            <p><?= htmlspecialchars($comment->content()); ?></p>
            <a href="index.php?controller=comment&amp;action=validcomment&amp;id=<?=$comment->id()?>" class="btn btn-info mr-2">Conserver</a>
        <a href="index.php?controller=comment&amp;action=moderatecomment&amp;id=<?=$comment->id()?>" class="btn btn-info">Supprimer</a>

    <?php
        }
    }
    else
    {
        ?>
        <p>Aucun commentaire signalé</p><?php
        
    }
    ?>
