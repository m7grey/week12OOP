<?php

//Filename: Shape4.php

abstract class Shape
{
    function getArea()
    {
        return 0;
    }
}

class Circle extends Shape
{
    private $radius = 1;

    function __construct($radius)
    {
        $this->radius = $radius;
    }

    function getArea()
    {
        return $this->radius * $this->radius * pi();
    }
}

class Rectangle extends Shape
{
    private $height = 1;
    private $width = 1;


    function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    function getArea()
    {
        return $this->width * $this->height;
    }

}

class Triangle extends Rectangle
{
    function getArea()
    {
        return parent::getArea()* .5;
    }
}

class Square extends Rectangle
{
    function __construct($len)
    {
        parent::__construct($len, $len);
    }
}

function printShape($shape)
{
    $output = "The area for shape " . get_class($shape) . " is " . $shape->getArea();
    return $output;

}

$shapes[0] = new Circle(10);
$shapes[1] = new Circle(5);
$shapes[2] = new Rectangle(5, 6);
$shapes[3] = new Triangle(5, 6);
$shapes[4] = new Square(6);
$shapes[5] = new Rectangle(10, 6);


foreach ($shapes as $shape){
    echo printShape($shape);
    echo "<hr>";
}
    ?>