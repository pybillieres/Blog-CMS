<?php

namespace Pierre\P4\controller;

use Pierre\P4\Controller\SecureController;
use Pierre\P4\Model\PostManager;
use Pierre\P4\model\View;

class AdminController extends SecureController
{

    function index()
    {
        $postManager = new PostManager;
        $posts = $postManager->readPosts();
        $view = new View;
        $view->render('AdminIndexView', ['posts' =>$posts]);

    }

    function createPost()
    {

    }

    function readPost()
    {

    }

    function updatePost()
    {

    }

    function deletePost()
    {

    }

    function moderateComment()
    {

    }


}