<?php

namespace Pierre\P4\Framework;
use Pierre\P4\controller\PostController;
use Pierre\P4\Controller\ConnectionController;
use Pierre\P4\Model\View;


class Router {

    // Route une requête entrante : exécute l'action associée
    public function routeRequest() {
      try {
        // Fusion des paramètres GET et POST de la requête
        $request = new Request(array_merge($_GET, $_POST));
        $controller = $this->createController($request);
        $action = $this->createAction($request);
      var_dump($controller);
        $controller->executeAction($action);
      }
      catch (\Exception $e) {
        //$this->manageError($e);
        echo 'toto';
      }
    }

  
    // Crée le contrôleur approprié en fonction de la requête reçue
    private function createController(Request $request) {
      $controller = "Post";  // Contrôleur par défaut
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
  
    // Détermine l'action à exécuter en fonction de la requête reçue
    private function createAction(Request $request) {
      $action = "index";  // Action par défaut
      if ($request->existParameter('action')) {
        $action = $request->Parameter('action');
      }
      return $action;
    }
  
    // Gère une erreur d'exécution (exception)
    private function manageError(\Exception $exception) {
      $view = new View('erreur');
      $view->render(array('msgErreur' => $exception->getMessage()));
    }
  }



/*
class Router
{

function route(){
    try
    {
        $request = new Request(array_merge($_GET, $_POST));
        $controller = createController(); //revoir utilisation $this
        $action = createAction();
    }
    catch (\Exception $e)
    {

    }

    function createController()
    {

    }

    function createAction()
    {

    }

}
}
    /*
    $request = new Request();
    var_dump($request);

if(isset($_GET['action']))
{
    if($_GET['action'] == 'listPost')
    {
        var_dump($request);  
    }
    elseif($_GET['action'] == 'post')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            $postCtrller = new PostController;
            $postCtrller->post($_GET['id']);
        }
        else
        {
            echo 'pas d\'ID valide';
        }

    }
    elseif($_GET['action']== 'connection')
    {
        $cnxCtrller = new ConnectionController;
        $cnxCtrller->ConnectionView();
    }
    else
    {

    }
}

else
{
    $postCtrller = new PostController;
    $postCtrller->listPosts();
}
}
}
*/