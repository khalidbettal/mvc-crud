<?php

namespace main\models;
use PDO;

class model
{
    

public function list(){
    $statement= dbModel::connect()->query("SELECT * FROM users");
    return $statement->fetchAll(PDO::FETCH_CLASS,__CLASS__);
}
public function create($name,$email,$password){
    $statement = dbModel::connect()->prepare("INSERT  INTO users VALUES(null,?,?,?)") ;
    return $statement->execute([$name,$email,$password]);
}
public function call($id){
    $statement = dbModel::connect()->query("SELECT * FROM users WHERE id=$id");
    return $statement->fetchAll(PDO::FETCH_CLASS,__CLASS__);
}
public function delete($id){
    $statement = dbModel::connect()->prepare("DELETE  FROM users WHERE id=?");
    $statement->execute([$id]);
}
public function update($name,$email,$password,$id){
    $statement = dbModel::connect()->prepare("UPDATE  users 
         SET
         name=? ,
         email=? ,
         password=?
         WHERE id=?
    ");
    return $statement->execute([$name,$email,$password,$id]);
}   
}
