<?php

namespace Pierre\P4\Framework;
use Pierre\P4\Framework\Request;
use Pierre\P4\Model\View;

abstract class Controller
{
 // Action à réaliser
 private $action;
 // Requête entrante
 protected $request;

 public function setRequest(Request $request) {
   $this->request = $request;
 }


 public function executeAction($action) {
   if (method_exists($this, $action)) {
     $this->action = $action;
     $this->{$this->action}();
   }
   else {
     $controllerClass = get_class($this);
     throw new \Exception("Action '$action' non définie dans la classe $controllerClass");
   }
 }

 public function checkSession()
 {
  return $this->request->getSession()->existAttribut("userId");
 }

 public abstract function index();

 protected function redirect($controller, $action='', $id='')
 {
  echo 'toto';
  var_dump($this);
   header('location:index.php?controller='.$controller.'&action='.$action.'&id='.$id);
 }

}
