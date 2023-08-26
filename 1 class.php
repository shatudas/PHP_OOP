<?php


class vihcal{
 
 public $color;

 function display(){
 	echo "Welcome to bamngladesh<br/>";
 }

 function setcolor($color){
 	$this->color =$color;
 }

 function getcolor(){
 	echo "Color Is: {$this->color} ";
 }


}

$obj = new vihcal();
$obj->display();
$obj->color ="RED";
echo $obj->color ."<br/>";

$obj->getcolor();



