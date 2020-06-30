<?php

namespace Pierre\P4\Controller;

use Pierre\P4\Framework\Controller;
use Pierre\P4\model\View;

class UserController extends Controller
{
    function index()
    {
        echo 'titi';
    }
    function changePassword()
    {
        if($this->checkSession())
        {
            $view = new View;
            $view->render('ChangePasswordView');
    
        }
    }
}