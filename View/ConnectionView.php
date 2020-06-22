<?php
$this->_title = 'toto';
?>
<a href='index.php'>Retourner à la page d'accueil</a>
<form method="post" action='index.php'>
    login<input type="text" name="login"><br/>
    password<input type="password" name="password">
    <input type="hidden" name='action' value='login' > 
    <input type="hidden" name='controller' value='connection'>
    <input type="submit" value='submit'>
</form>