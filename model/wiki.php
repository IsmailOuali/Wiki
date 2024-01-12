<?php

require '../config.php';
require 'tag.php';
require 'categorie.php';

class wiki{
    private $id_wiki;
    private $name_wiki;
    private $description_wiki;
    private  $category;
    private  $tags;
    private $status;
    private $image;
    private $date;

    public function __construct(){

    }
    
    public function __get($prop){
        return $this->$prop;
    }

    public function __set($prop, $value){
        $this->$prop = $value;
    }

    public static function addwiki($name_wiki, $description_wiki, $category, $tags, $image, $date){
        $sql = DBconnection::connection()->prepare("INSERT INTO wikis(name_wiki, description_wiki, category, tags, status, image, date) VALUES(:name_wiki, :description_wiki, :category, :tags, 1, :image, :date)");
        $sql->bindParam(':name_wiki', $name_wiki);
        $sql->bindParam(':description_wiki', $description_wiki);
        $sql->bindParam(':category', $category);
        $sql->bindParam(':tags', $tags);
        $sql->bindParam(':image', $image);
        $sql->bindParam(':date', $date);


        $sql->execute();
    }

    public 
}