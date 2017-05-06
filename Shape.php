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

$myshape = new Circle(10);
print_r($myshape->getArea());

?>

