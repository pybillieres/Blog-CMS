<?php

namespace Pierre\P4\Framework;
use Pierre\P4\controller\PostController;
use Pierre\P4\Controller\ConnectionController;
use Pierre\P4\Controller\UserController;
use Pierre\P4\Model\View;


class Router {

    public function routeRequest() {
      try {
        $request = new Request(array_merge($_GET, $_POST));
        $controller = $this->createController($request);
        $action = $this->createAction($request);
        $controller->executeAction($action);
      }
      catch (\Exception $e) {
        $this->manageError($e);
      }
    }

  

    private function createController(Request $request) {
      $controller = "Post";
      if ($request->existParameter('controller')) {
        $controller = $request->Parameter('controller');
        $controller = ucfirst(strtolower($controller));
      }
      $controllerClass = $controller . 'Controller';
      $controllerClassNamespace =  '\\Pierre\\P4\\Controller\\'.$controllerClass;
      //if (file_exists($fichierControleur)) { Mettre cette verif dans l'autoload
        $controller = new $controllerClassNamespace;
        $controller->setRequest($request);
        return $controller;
      //}
      //else
      //  throw new \Exception("Fichier '$fichierControleur' introuvable");
    }
  

    private function createAction(Request $request) {
      $action = "index";
      if ($request->existParameter('action')) {
        $action = $request->Parameter('action');
      }
      return $action;
    }
  

    private function manageError(\Exception $exception) {
      //remplir vue en cas d'erreur
    }
  }

