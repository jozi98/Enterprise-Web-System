<?php
class controller
{
  private $model;
  
  public function __construct($model){
    $this->model = $model;
    
   }
   
   public function clicked(){
      
      $this->model->string = "using the controller to update the view;
      }
   }
?>