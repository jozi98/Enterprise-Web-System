<?php
class View
{
  private $model;
  private $controller;
  
  public function __construct($model,$constructor){
    $this->model = $model;
    $this->controller= $controller;
    
   }
   
   public function output(){
      
     return '<p><a href = "mvc.php?action=clicked">'.$this->model->string."</a><p>";
      }
   }
?>