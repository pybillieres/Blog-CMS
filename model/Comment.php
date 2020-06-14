<?php

namespace Pierre\P4\Model;
use Pierre\P4\Framework\ObjectClass;

class Comment extends ObjectClass
{
    private $_id,
            $_idPost,
            $_author,
            $_content,
            $_date;

    public function id()
    {
        return $this->_id;
    }

    public function idPost()
    {
        return $this->_idPost;
    }

    public function author()
    {
        return $this->_author;
    }

    public function content()
    {
        return $this->_content;
    }

    public function date()
    {
        return $this->_date;
    }

    public function setId($id)
    {
        $id = (int) $id;
        if ($id > 0)
        {
            $this->_id = $id;
        }
    }

    public function setIdPost($idPost)
    {
        $idPost = (int) $idPost;
        if ($idPost > 0)
        {
            $this->_idPost = $idPost;
        }
    }

    public function setAuthor($author)
    {
        if(is_string($author))
        {
            $this->_author = $author;
        }
    }

    public function setContent($content)
    {
        if(is_string($content))
        {
            $this->_content = $content;
        }
    }

    public function setDate($date)
    {
        $this->_date = $date;
    }
}