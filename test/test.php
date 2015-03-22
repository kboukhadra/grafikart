<?php
$v ="Corsa" ;


class Voiture {
   public $marque;
   
   public function show(){
       echo "marque est :".$this->marque;
}
    
}

$voiture = new Voiture();
$voiture->marque=$v ;
$voiture->show() ;
    