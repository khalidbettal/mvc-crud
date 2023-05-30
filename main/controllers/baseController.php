<?php

namespace main\controllers;
use main\models\model;

class baseController
{
    public array $datas = [];
    public function link(){
       return $model = new model();
    }
    public function rederect($action,$users){
        $this->datas;
        return require "main/views/".$action.".php";
     }
    public function index($location){
        return header("location:$location");
    }
}
