<?php
namespace Pierre\P4\Controller;
use Pierre\P4\model\View;
use Pierre\P4\Framework\Controller;

class ConnectionController extends Controller
{
    function index()
    {
        $this->Connection();
    }

    function Connection()
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