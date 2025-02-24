<?php

trait CircleTrait{
    private float $raduis;

    function getRaduis():float{
        return $this->raduis;
    }
    function setRaduis(float $raduis):void{
        $this->raduis = $raduis;
    }
    function getArea(){
        return 3.14*$this->raduis*$this->raduis;
    }
    function toString(){
        return "Circle [raduis=$this->raduis, color= ".$this->getColor().$this->getArea()."]";
    }
}
class Shape{
    private string $color;

    function __construct(string $color){
        $this->color= $color;
    }
    function getColor():string{
        return $this->color;
    }
    function setColor($color):void{
        $this->color = $color;
}
}
class Circle {
    // private float $raduis;
    use CircleTrait;
    private Shape $shape;

    function __construct(){
        $this->raduis = 1.0;
        $this->shape = new Shape("red");
    }
    public static function  cirlceWithRaduis(float $raduis):Circle{
        return new Circle($raduis);
    }
    public static function cirlceWithRaduisAndColor(float $raduis,string $color):Circle{
        $this->shape = new Shape($color);
        return new Circle($raduis,$color);
        
    }
    function getColor():string{
        return $this->shape->getColor();
    }
    function setColor($color):void{
        $this->shape->setColor($color);
    }
    // function getRaduis():float{
    //     return $this->raduis;
    // }
    // function setRaduis($raduis):float{
    //     $this->raduis = $raduis;
    // }
    
    // function getArea(){
    //     return 3.14*$this->raduis*$this->raduis;
    // }
    // function toString(){
    //     return "Circle [raduis=$this->raduis, color= ".$this->getColor().$this->getArea()."]";
    // }
}
class Cylinder extends Circle{
    private float $height;
    function __construct(float $raduis,float $height){
        parent::__construct($raduis);
        $this->height = $height;
    }
    function getHeight():float{
        return $this->height;
    }
    function setHeight($height):void{
        $this->height = $height;
    }
    function getVolume(){
        return 3.14 * $this->getRaduis() * $this->getRaduis() * $this->height;
    }
    function toString(){
        return "Cylinder Area is :".$this->getVolume();
    }

}
$circle = new Circle();
echo $circle->getArea();
echo $circle->toString();
$cylinder = new Cylinder(3.0, 5.0);
echo $cylinder->toString();
?>