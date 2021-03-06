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
        echo "I am alive";
    }

    function getArea()
    {
        return $this->radius * $this->radius * pi();
    }
}

$myShape = new Circle(10);
print_r($myShape->getArea());
echo "<hr>";
$myShape2 = new Circle(5);
print_r($myShape2->getArea());


?>

