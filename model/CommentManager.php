<?php

namespace Pierre\P4\Model;
use Pierre\P4\framework\Manager;
use Pierre\P4\Model\Comment;

class CommentManager extends Manager
 {
    function readCommentsById($id)
    {
        $req = $this->_db->prepare('SELECT * FROM comments WHERE idPost=?');
        $req->execute(array($id));
        while($row = $req->fetch())
        {
            $comment = new Comment($row);
            $comments[] = $comment;
        }
        if(isset($comments)){
            return $comments;     
        }
    }

    function readCommentById($id)
        {
            $req = $this->_db->prepare('SELECT * FROM comments WHERE id=?');
            $req->execute(array($id));
                $row= $req->fetch();
                $comment = new Comment($row);
                return $comment;     
        }

    function readReportedComments()
        {
            $req = $this->_db->prepare('SELECT * FROM comments WHERE reported=?');
            $req->execute(array(1));
            while($row = $req->fetch())
            {
                $comment = new Comment($row);
                $comments[] = $comment;
            }
            if(isset($comments)){
                return $comments;     
            }
        }

    
    public function createComment(Comment $comment)
    {
        $req = $this->_db->prepare('INSERT INTO comments(idPost, author, content, date) VALUES(:idPost, :author, :content, :date) ');
        $req->execute(array (
            ':idPost'=>$comment->idPost(), 
            ':author'=>$comment->author(), 
            ':content'=>$comment->content(), 
            ':date'=>$comment->date()));
        
    }

    public function deleteComment($id)
    {
        $req=$this->_db->prepare('DELETE FROM comments WHERE id=?');
        $req->execute(array($id));       
    }

    public function updateComment(Comment $comment)
    {
        $req=$this->_db->prepare('UPDATE comments SET author=:author, content=:content, reported=:reported WHERE id=:id');
        $req->execute(array(':author'=>$comment->author(),
                        ':content'=>$comment->content(),
                        ':reported'=>$comment->reported(),
                        ':id'=>$comment->id()));
    }
 }