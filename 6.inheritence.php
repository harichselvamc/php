<?php


class vehicle{
  
  public $name;
  public $color;
  
  public function __construct($name,$color){
    $this->name=$name;
    $this->color=$color;
    
  }
  
  public function intro(){
    echo "This car is {$this->name}and color is {$this->color}\n";
    
  }
  
}

class honda extends vehicle{
  
  
  
  public function message(){
    echo "which  car this is? \n";
  }
}


$city= new honda("city120","red");



$city->message();

$city->intro();



?>
