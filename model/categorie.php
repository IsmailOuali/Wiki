<?php
// require_once '../config.php';

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

    public static function showcategory(){
        $sql = DBconnection::connection()->query("SELECT * FROM categorie");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        $cat = array();
        
        foreach ($result as $row){
            $quest = new categorie($row['id_category'], $row['name_category']);
            array_push($cat, $quest);

        }
        return  $cat; 
    }  
}

// $cat = categorie::showcategory();

// foreach($cat as $row){
//     echo $row->__get('name_category');
// }