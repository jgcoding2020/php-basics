<?php
// Demonstration of abstraction in PHP

// Abstract class
abstract class Shape {
    // Abstract method (no implementation)
    abstract public function area();
}

// Concrete class implementing the abstract class
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implementing the abstract method
    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

// Concrete class implementing the abstract class
class Square extends Shape {
    private $sideLength;

    public function __construct($sideLength) {
        $this->sideLength = $sideLength;
    }

    // Implementing the abstract method
    public function area() {
        return pow($this->sideLength, 2);
    }
}

// Create instances of concrete classes
$circle = new Circle(5);
$square = new Square(4);

// Call the area method on each object
echo "Area of the Circle: " . $circle->area() . "\n";
echo "Area of the Square: " . $square->area() . "\n";

// Attempt to create an instance of the abstract class (will cause an error)
// $shape = new Shape();
?>
