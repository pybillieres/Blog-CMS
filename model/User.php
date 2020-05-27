<?php

namespace Pierre\P4\Model;
use Pierre\P4\Framework\ObjectClass;


class User extends ObjectClass
{
    private $_id,
            $_login,
            $_password;
            //voir si un attribut 'droit' est pertinent

    public function id()
    {
        return $this->_id;
    }

    public function login()
    {
        return $this->_login;
    }

    public function password()
    {
        return $this->_password;
    }

    public function setId($id)
    {
        $id = (int) $id;
        if ($id > 0)
        {
            $this->_id = $id;
        }
    }

    public function setLogin($login)
    {
        if(is_string($login))
        {
            $this->_login = $login;
        }
    }

    public function setPassword($password)
    {
        if(is_string($password))
        {
            $this->_password = $password;
        }
    }
}