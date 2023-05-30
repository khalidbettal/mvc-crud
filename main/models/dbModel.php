<?php

namespace main\models;
use PDO;

class dbModel
{
   public static function connect(){
    try{
        return new PDO('mysql:dbname=crud;host=localhost','root','');
    }catch(\PDOException $e){
        echo 'faild connect to data base';
    }
    
}
}