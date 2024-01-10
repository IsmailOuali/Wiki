<?php
require_once '../config.php';

class categorie{
    private $id_category;
    private $name_category;

    public function __construct(){

    }

    public function __get($prop){
        return $this->$prop;
    }

    public function __set($prop, $value){
        $this->$prop = $value;
    }

    public function addcategory($name_category)
    {
        $sql = DBconnection::connection()->prepare("INSERT INTO categorie(name_category) VALUES(:name_category)");
        $sql->bindParam(':name_category', $name_category);
        $sql->execute();
    }
}

// $obj = new categorie();
// $obj->addcategory('dd');