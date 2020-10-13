<?php
include_once ("Colorable.php");
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$shapes[0]= new Square("Square_one",4);
$shapes[1]= new Square("Square_two",6);
$shapes[2]= new Rectangle("rectangle_one",7,9);
$shapes[3]= new Circle("Circle_three",5);
$shapes[4]= new Cylinder("Cylinder",6,8);

foreach ($shapes as $shape){
    if($shape instanceof Colorable){
        echo $shape->howToColor()."<br>";
    }
    else{
        echo $shape->calculateArea()."<br>";
    }
}
