<?php
$this->_title = 'Nouvel article';
?>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top ">
    <ul class="navbar-nav flex-column-sm ">
        <li class="nav-item navbar-left"><a class="nav-link" href='index.php?controller=user&amp;action=changePassword'>Modifier Password</a></li>
        <li class="nav-item navbar-right"><a class="nav-link" href="index.php?controller=post&amp;action=createPost">Créer nouveau post</a></li>
        <li class="nav-item navbar-right"><a class="nav-link" href='index?controller=connection&amp;action=logout'>Déconnexion</a></li>
    </ul>
</nav>

<form method=post action='index.php'>
    <input type="text" name='title'><br />
    <textarea class="mceEditor" name="content" rows="10" cols="200">
    </textarea>
    <input type='hidden' name='date'>>
    <input type="hidden" name='action' value='sendCreate'>
    <input type="hidden" name='controller' value='post'>
    <input type="submit" value="Creer le post">
</form>