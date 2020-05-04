<?php

namespace Pierre\P4\controller;
use Pierre\P4\model\PostManager;


function listPosts()
{
    $postManager = new PostManager;
    $posts = $postManager->readPosts();
    //comment traiter mes données ici ? point sur fetch() et ou le mettre

    //require(listView)
}

function post($id)
{
    $postManager = new PostManager;
    $post = $postManager->readPost($id);
    echo $post->title();
    //require(postView)
}




