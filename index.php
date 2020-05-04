<?php //ROUTEUR

namespace Pierre\P4;
use Pierre\P4\Autoloader;

require_once 'Autoloader.php';
require_once 'controller/PostController.php';

Autoloader::register(); //suffisant de le charger une seule fois ?


if(isset($_GET['action']))
{
    if($_GET['action'] == 'listPost')
    {
        //Pierre\P4\controller\listPosts();
    }
    elseif($_GET['action'] == 'post')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            controller\post($_GET['id']);
        }
        else
        {
            echo 'pas d\'ID valide';
        }

    }
    else
    {

    }
}

else
{
    controller\post(1);

}
