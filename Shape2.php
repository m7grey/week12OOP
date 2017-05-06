<?php

//Filename: Shape.php

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

$myShape = new Circle(10);
echo "The area for Circle " . get_class($myShape) . "is" . $myShape->getArea();
echo "<hr>";

$myShape2 = new Circle(5);
echo "The area for Circle " . get_class($myShape2) . "is" . $myShape2->getArea();
echo "<hr>";

$myShape3 = new Rectangle(2, 3);
echo "The area for Rectangle " . get_class($myShape3) . "is" . $myShape3->getArea();
echo "<hr>";

$myShape4 = new Triangle(5, 6);
echo "The area for Triangle " . get_class($myShape4) . "is" . $myShape4->getArea();
echo "<hr>";

$myShape5 = new Square(6);
echo "The area for Square " . get_class($myShape5) . "is" . $myShape5->getArea();

?>