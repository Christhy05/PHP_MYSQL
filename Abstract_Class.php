<?php
    abstract class Shape{
        abstract public function area();
    }
    class Rectangle extends Shape{
        public $height;
        public $width;
        public function __construct($height,$width){
            $this->height = $height;
            $this->width = $width;
        }
        public function area(){
            return $this->height * $this->width;
        }
    }
    class Circle extends Shape{
        public $radius;
        public function __construct($radius){
            $this->radius = $radius;
        }
        public function area(){
            return pi()*pow($this->radius,2);
        }
    }
    $obj1 = new Rectangle(89,54);
    echo 'Area Of Rectangle : '.$obj1->area().'<br>';

    $obj2 = new Circle(34);
    echo 'Area Of Circle   : '.$obj2->area();
?>