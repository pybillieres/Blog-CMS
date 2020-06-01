<?php
namespace Pierre\P4\Controller;
use Pierre\P4\model\View;
use Pierre\P4\Framework\Controller;
use Pierre\P4\Model\UserManager;

class ConnectionController extends Controller
{
    function index()
    {
        $this->connectionView();
    }

    function connectionView()//creer buildview dans la classe parente
    {
        $view = new View;
        $view->render('ConnectionView');
    }

    function login()
    {

        if($this->request->existParameter("login") && $this->request->existParameter("password"))
        {
            $login = $this->request->parameter('login');
            $password = md5($this->request->parameter('password'));
            $userManager = new UserManager;
            $user = $userManager->getUser($login);
            $userPassword = $user->password();

            if($password === $user->password())
            {
                echo 'toto';
            }
            else
            {
                echo 'pb dans le mdp';
            }
        }
        else
        {
            echo 'remplir champs svp';
        }
    }

    function logout()
    {

    }


}