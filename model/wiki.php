<?php
require_once 'C:\xampp\htdocs\Wiki-2\config.php';
require __DIR__.'/user.php';


class wiki{
    private $id_wiki;
    private $name_wiki;
    private $description_wiki;
    private  $category;
    private  $tags;
    private $status;
    private $image;
    private $date;
    private user $user;

    public function __construct($id_wiki,$name_wiki, $description_wiki, $category, $user){
        $this->id_wiki= $id_wiki;
        $this->name_wiki= $name_wiki;
        $this->description_wiki= $description_wiki;
        $this->category= $category;
        $this->user = new user();
    }
    
    public function __get($prop){
        return $this->$prop;
    }

    public function __set($prop, $value){
        $this->$prop = $value;
    }

    public static function addwiki($name_wiki, $description_wiki, $category, $tags, $image, $date, $id_user){
        $sql = DBconnection::connection()->prepare("INSERT INTO wikis(name_wiki, description_wiki, category, tags, status, image, date, id_user) VALUES(:name_wiki, :description_wiki, :category, :tags, 1, :image, :date, :id_user)");
        $sql->bindParam(':name_wiki', $name_wiki);
        $sql->bindParam(':description_wiki', $description_wiki);
        $sql->bindParam(':category', $category);
        $sql->bindParam(':tags', $tags);
        $sql->bindParam(':image', $image);
        $sql->bindParam(':date', $date);
        $sql->bindParam(':id_user', $id_user);


        $sql->execute();
    }

    public static function showwiki(){
        $sql = DBconnection::connection()->query("SELECT * FROM wikis where status = 1");
    
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            $wikis = array();
            
            foreach ($result as $row){
                $wik = new wiki($row['id_wiki'], $row['name_wiki'], $row['description_wiki'], $row['category'], $row['id_user']);
                array_push($wikis, $wik);
    
            }
            return  $wikis;
    }
    public static function deletewiki($id_wiki){
        
        $req = DBconnection::connection()->prepare("DELETE FROM wikis WHERE id_wiki = :id_wiki");
        $req->bindParam(':id_wiki', $id_wiki);
        $req->execute();    

    }

    public static function archivewiki($id_wiki){
        $req = DBconnection::connection()->prepare("UPDATE wikis set status = 0 WHERE id_wiki = :id_wiki");
        $req->bindParam(':id_wiki', $id_wiki);
        $req->execute();
    }

    public static function showwikicat($category){
        $req = DBconnection::connection()->prepare("SELECT * FROM wikis where category = :category and status = 1");
        $req->bindParam(':category', $category);
        $req->execute();

        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        $wikis = array();
        
        foreach ($result as $row){
            $wik = new wiki($row['id_wiki'], $row['name_wiki'], $row['description_wiki'], $row['category'], $row['id_user']);
            array_push($wikis, $wik);

        }
        return  $wikis;


    }

    public static function showwikiid($id_wiki){
        $req = DBconnection::connection()->prepare("SELECT * FROM wikis where id_wiki = :id_wiki and status = 1");
        $req->bindParam(':id_wiki', $id_wiki);
        $req->execute();

        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        $wikis = array();
        
        foreach ($result as $row){
            $wik = new wiki($row['id_wiki'], $row['name_wiki'], $row['description_wiki'], $row['category'], $row['id_user']);
            array_push($wikis, $wik);

        }
        return  $wikis;


    }

    public static function showLastWikis(){
        $req = DBconnection::connection()->query("SELECT * FROM wikis ORDER BY date DESC LIMIT 3");

        
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        $wikis = array();
        
        foreach ($result as $row){
            $wik = new wiki($row['id_wiki'], $row['name_wiki'], $row['description_wiki'], $row['category'], $row['id_user']);
            array_push($wikis, $wik);

        }
        return  $wikis;
    }

    public static function CountWiki(){
        $req = DBconnection::connection()->query("SELECT COUNT(*) FROM wikis");
        $result = $req->fetch(PDO::FETCH_NUM);

        return $result;

    }

    public static function CountArchivedWiki(){
        $req = DBconnection::connection()->query("SELECT COUNT(*) FROM wikis WHERE status = 0");
        $result = $req->fetch(PDO::FETCH_NUM);

        return $result;

    }

    public static function searchwiki($input){
        $input = "%$input%";
    
        $sql = DBconnection::connection()->prepare("
            SELECT * FROM wikis 
            WHERE name_wiki LIKE ? 
               OR category LIKE ? 
               OR tags LIKE ?
        ");
    
        $sql->execute([$input, $input, $input]);
    
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        $wikis = array();
    
        foreach ($result as $row){
            $wik = new wiki($row['id_wiki'], $row['name_wiki'], $row['description_wiki'], $row['category'], $row['id_user']);
            array_push($wikis, $wik);
        }
    
        return $wikis;
    }
    

    public static function showwikiuser($id_user){
        $sql = DBconnection::connection()->query("SELECT * FROM wikis JOIN users where wikis.id_user = users.id_user AND users.id_user = $id_user");
    
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            $wikis = array();
            
            foreach ($result as $row){
                $wik = new wiki($row['id_wiki'], $row['name_wiki'], $row['description_wiki'], $row['category'], $row['id_user']);
                array_push($wikis, $wik);
    
            }
            return  $wikis;
    }

    public static function showwikitag($id_wiki){
        $sql = DBconnection::connection()->query("SELECT tags FROM wikis where id_wiki = $id_wiki");
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        return  $result;
    }

    public static function modifywiki($id_wiki, $name_wiki, $description_wiki, $category){
        $sql = DBconnection::connection()->prepare("UPDATE wikis SET name_wiki = :name_wiki , description_wiki = :description_wiki , category = :category WHERE id_wiki = :id_wiki");
        $sql->bindParam(':id_wiki', $id_wiki);
        $sql->bindParam(':name_wiki', $name_wiki);
        $sql->bindParam(':description_wiki', $description_wiki);
        $sql->bindParam(':category', $category);

        $sql->execute();

    }
}