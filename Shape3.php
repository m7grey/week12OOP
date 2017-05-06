<?php

//Filename: Shape3.php

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
        return parent::getArea();
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
    $output = "The area for shape" . get_class($shape) . " is " . $shape->getArea();
    return $output;

}

$myShape = new Circle(10);
echo printShape($myShape);
echo "<hr>";

$myShape2 = new Circle(5);
echo printShape($myShape2);
echo "<hr>";

$myShape3 = new Rectangle(2, 3);
echo printShape($myShape3);
echo "<hr>";

$myShape4 = new Triangle(5, 6);
echo printShape($myShape4);
echo "<hr>";

$myShape5 = new Square(6);
echo printShape($myShape5);

?>