<?php

namespace Pierre\P4\Model;
use Pierre\P4\Framework\Manager;

class UserManager extends Manager
{

            public function createUser($login, $password)
            {
                $password = md5($password);
                var_dump($password);
                $req = $this->_db->prepare('INSERT TO users (login, password) VALUE (:login, :password)');
                $req->execute(array(
                    ':login'=>$login,
                    ':password'=>$password
                ));
            }

            public function modifyUser()
            {

            }

            public function getUser($login)
            {
                $req = $this->_db->prepare('SELECT * FROM users WHERE login=?');
                $req->execute(array($login));//prevoir cas ou login non trouvé, verifier qu'il n'y a qu'une seule ligne
                $row = $req->fetch();
                $user = new User($row);
                return $user;
            }

            public function deleteUser($id)
            {
                $req = $this->_db->prepare('DELETE * FROM users WHERE id=?');
                $req->execute(array($id));
            }
    
}