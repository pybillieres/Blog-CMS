<?php
$this->_title = 'Changer password';
?>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top ">
      <ul class="navbar-nav flex-column-sm ">
        <li class="nav-item navbar-left"><a class="nav-link" href='index.php?controller=user&amp;action=changePassword'>Modifier Password</a></li>
        <li class="nav-item navbar-right"><a class="nav-link" href="index.php?controller=post&amp;action=createPost">Créer nouveau post</a></li>
        <li class="nav-item navbar-right"><a class="nav-link" href='index?controller=comment&amp;action=moderateComments'>Modération commentaires</a></li>  
        <li class="nav-item navbar-right"><a class="nav-link" href='index?controller=connection&amp;action=logout'>Déconnexion</a></li>  
    </ul>
    </nav>

<a href='index.php?controller=connection' class="btn btn-primary">Retourner à la page d'administration</a>


<form method="post" action='index.php' class="mt-5 col-lg-4 formLogin text-center">
    <fieldset>
        <label for="password">Nouveau mot de passe</label>
        <input type="text" name="login" id="login" class="form-control col-lg-12">
        <label for="passwordConfirm">Confirmez votre nouveau mot de passe</label>
        <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control col-lg-12">
        <input type="hidden" name='action' value='password'>
        <input type="hidden" name='controller' value='user'>
        <input type="submit" value='Confirmer' class="mt-3 btn btn-primary">
    </fieldset>
</form>