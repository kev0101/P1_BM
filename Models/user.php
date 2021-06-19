<?php
include 'db.php';

class User extends DB{
    private $nombre;
    private $username;


    public function userExists($user, $pass){
        $md5pass = $pass;
         
        $query = $this->connect()->prepare('SELECT Identificacion,Contraseña FROM sistema WHERE Identificacion = :user AND Contraseña = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM `cliente` WHERE Identificacion = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['Nombre'];
            $this->usename = $currentUser['Nombre'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}

?>

