<?php
class model
{
public $string;

public function__construct(){
  $this->string = "Using PHP in MVC! Inside the Model";
  }
}

class View
{
  private $model;
  private $controller;
	
  
  public function __construct($model,$controller){
    $this->model = $model;
    $this->controller= $controller;
   }
   
   public function output(){
      
     return '<p><a href = "mvc.php?action=clicked">'.$this->model->string."</a><p>";
      }
   }

 
 class controller
{
  private $model;
  
  public function __construct($model){
    $this->model = $model;
    
   }
   
   public function clicked(){
      
      $this->model->string = "using the controller to update the view";
     
      }
   }
   
   $model_mvc = new model();
   $controller_mvc = new controller($model_mvc);
   $view_mvc = new View($model_mvc,$controller_mvc);
   echo $view_mvc->output();
   //. is the same as ->
   
   
   
  ?>
   

 
