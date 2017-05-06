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
        echo "I am alive";
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


    function __construct($width, $height) {
    $this->width= $width;
    $this->height = $height;
        echo "I am alive ";
    }

    function getArea()
    {
        return $this->width * $this->height;
    }

}

$myShape = new Circle(10);
print_r($myShape->getArea());
echo "<hr>";
$myShape2 = new Circle(5);
print_r($myShape2->getArea());
echo "<hr>";
$myShape3 = new Rectangle(2,3);
print_r($myShape3->getArea());

?>

