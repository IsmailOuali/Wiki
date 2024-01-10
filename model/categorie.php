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

    public function showcategory(){
        $sql = DBconnection::connection()->query("SELECT name_category FROM categorie");
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        $cat = array();
        
        foreach ($result as $row){
            $quest = new categorie();
            array_push($cat, $quest);

        }
        return  $cat;  
    }  
}

// $obj = new categorie();
// $cat = $obj->showcategory();

// foreach($cat as $row){
//     echo $row->name_category;
// }