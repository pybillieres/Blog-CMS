<?php

namespace Pierre\P4\Controller;
use Pierre\P4\Framework\Controller;

abstract class SecureController extends Controller
{
    function executeAction($action)
    {
    if($this->request->getSession()->existAttribut("idUser"))
    {
        parent::executeAction($action);
    }

    else
    {
        echo 'securecontroller';
    }
}
    

}