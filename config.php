<?php

define ("dbhost", 'localhost');
define("dbusr", 'root');
define("dbpwd", 'root');
define("db", 'QUIZZ');

class DBconnection{
    public function __construct(){

    }

    public static function connection(){
        try{
            $conn = new PDO("mysql:host=" . dbhost . ";dbname=" . db, dbusr, dbpwd);
            $conn->setAttribute(PDO::ATTE_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "DB connectionis failed" . $e->getMessage();
        }
    }
}
