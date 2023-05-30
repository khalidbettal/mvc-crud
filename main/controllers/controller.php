<?php

namespace main\controllers;
use main\models\model;


class controller extends baseController
{
    public  function listAction()
    {
      $users = $this->link()->list();
      return $this->rederect('list',$users);
    }
    
    public  function createAction()
    {
       $this->rederect('create','');
       if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->link()->create($name,$email,$password);
        return $this->index('/');
       }
       
    } 
    
    public  function callAction()
    {
    $users= $this->link()->call($_GET['id']);
    return $this->rederect('update',$users);
    } 
    public function updateAction(){
      if(isset($_POST['update'])){
        $id=$_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->link()->update($name,$email,$password,$id);
        return $this->index('/');
       }
    }
    public function deleteAction()
    {
       $this->link()->delete($_GET['id']);

      return $this->listAction();

    }
   
}