<?php
include 'db.php';

class User extends DB
{
    private $__nombre;
    private $__username;

    public function userExists($user, $pass)
    {
        $md5pass = md5($pass);
        $query   = $this->connect()->prepare('SELECT * FROM usuarios WHERE UserName = :user AND Password = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if ($query->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function setUser($user)
    {
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE UserName = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->nombre  = $currentUser['Nombre'];
            $this->usename = $currentUser['UserName'];
        }
    }

    public function getNombre()
    {
        return $this->nombre;
    }
}