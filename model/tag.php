<?php

require_once '../config.php';

class tag{
    private $id_tag;
    private $name_tag;

    public function __construct(){

    }

    public function __get($prop){
        return $this->$prop;
    }

    public function __set($prop, $value){
        $this->$prop = $value;
    }

    public function addtag($name_tag){
        $sql = DBconnection::connection()->prepare("INSERT INTO tags(name_tag) VALUES(:name_tag)");
        $sql->bindParam(':name_tag', $name_tag);
        $sql->execute();
    }
}