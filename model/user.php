<?php

require_once '../config.php';

class user{
    private $id_user;
    private $name_user;
    private $email_user;
    private $password_user;
    private $id_role;

    public function __construct($id_user, $name_user, $email_user, $password_user, $id_role){
        $this->id_user = $id_user;
        $this->name_user = $name_user;
        $this->email_user = $email_user;
        $this->password_user = $password_user;
        $this->id_role = $id_role;
    }

    public function __get($prop){
        return $this->$prop;
    }

    public function __set($prop, $value){
        $this->$prop = $value;
    }
    
    public static function adduser($name_user, $email_user, $password_user){
        $sql = DBconnection::connection()->prepare("INSERT INTO users(id_user, name_user, email_user, password_user, id_role) VALUES (NULL, :name_user, :email_user, :password_user, 1)");
        $sql->bindParam(':name_user', $name_user);
        $sql->bindParam('email_user', $email_user);
        $sql->bindParam(':password_user', $password_user);
        $sql->execute();
    }
}