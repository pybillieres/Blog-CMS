<?php

namespace Pierre\P4\Framework;
use Pierre\P4\controller\PostController;
use Pierre\P4\Framework\Request;
use Pierre\P4\Controller\ConnectionController;


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