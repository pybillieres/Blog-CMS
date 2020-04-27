<?php
class PostManager
{
    private $_db;

    public function __constructor($db)
    {
        $this->setDb($db);
    }

    public function setDb()
    {
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
        $this->_db = $db;
        
    }


    public function createPost($title, $content, $date) //utiliser tjr meme nom de variable genant pour lecture du code ?
    {
        $req = $this->_db->prepare('INSERT TO posts(title, content, date) VALUES(:title, :content, :date) ');
        $req->execute(array (
            ':title'=>$title,
            ':content'=>$content,
            ':date'=>$date));
        
    }

    public function readPost($id)
    {

    }

    public function readPosts()
    {

    }

    public function updatePost(Post $post)
    {

    }

    public function deletePost(Post $post)
    {

    }

    public function count()
    {

    }
}

//a quel endroit appeller le PDO