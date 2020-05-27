<?php
namespace Pierre\P4\Controller;
use Pierre\P4\model\View;

class ConnectionController
{

    function ConnectionView()
    {
        $view = new View;
        $view->render('ConnectionView');
    }

    function PasswordCheck()
    {
        $user = $_POST['login'];
        $password = $_POST['password'];
        echo $user, $password;
    }
}