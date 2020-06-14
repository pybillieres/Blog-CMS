<?php
namespace Pierre\P4\controller;
use Pierre\P4\Model\CommentManager;
use Pierre\P4\Framework\Controller;
use Pierre\P4\Model\Comment;


class CommentController extends Controller
{
    function index()
    {

    }
    
    function listComment($postId)
    {
        $commentManager = new CommentManager;
        $listComments = $commentManager->readCommentsById($postId);
        return $listComments;
    }

    function createComment()
    {
        $author=$this->request->parameter('author');
        $content=$this->request->parameter('content');
        $date=date("Y-m-d H:i");
        $idPost=$this->request->Parameter('idPost');
        $data=['author'=>$author, 'content'=>$content, 'date'=>$date, 'idPost'=>$idPost];
        $comment= new Comment($data);
        $manager = new CommentManager;
        $manager->createComment($comment);
        $this->redirect('post', 'post', $idPost );
        //$postController = new PostController;
        //$postController->Post;
    }

    function moderateComment()
    {
        if($this->checkSession())
        {
          
        }
        else
        {
            
        }
    }
}