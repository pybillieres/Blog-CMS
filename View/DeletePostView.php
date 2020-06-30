<?php
$this->_title = 'Supprimer article';
?>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top ">
    <ul class="navbar-nav flex-column-sm ">
        <li class="nav-item navbar-left"><a class="nav-link" href='index.php?controller=user&amp;action=changePassword'>Modifier Password</a></li>
        <li class="nav-item navbar-right"><a class="nav-link" href="index.php?controller=post&amp;action=createPost">Créer nouveau post</a></li>
        <li class="nav-item navbar-right"><a class="nav-link" href='index?controller=connection&amp;action=logout'>Déconnexion</a></li>
    </ul>
</nav>

<p>Etes vous sur de vouloir supprimer <?= $title ?> définitivement ? </p>
<a href="index.php?controller=connection" class="btn btn-info mr-2">Retour</a>
<a href="index.php?controller=post&amp;action=confirmDelete&amp;id=<?= $id ?>" class="btn btn-info mr-2">Supprimer</a>