<?php
namespace Pierre\P4\Controller;

use Pierre\P4\controller\AdminController;
use Pierre\P4\model\View;
use Pierre\P4\Framework\Controller;
use Pierre\P4\Model\UserManager;
use Pierre\P4\Framework\Session;

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

            if($password === $user->password())
            {
                $this->request->getSession()->setAttribut('userId', $user->id());//pourquoi acceder a la session via la requete et pas directement ?
                $this->request->getSession()->setAttribut('login', $user->login());
                $admin = new AdminController;
                $admin->index();
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
        $this->request->getSession()->destroySession();
    }


}