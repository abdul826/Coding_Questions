<?php
interface Shape {
    public function area(); // Method declaration
    public function perimeter(); // Method declaration
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
    }

    public function perimeter() {
        return 2 * pi() * $this->radius;
    }
}

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }

    public function perimeter() {
        return 2 * ($this->width + $this->height);
    }
}

// Usage
$circle = new Circle(5);
echo "Circle Area: " . $circle->area() . "\n"; // Output: Circle Area: 78.539816339744
echo "Circle Perimeter: " . $circle->perimeter() . "\n"; // Output: Circle Perimeter: 31.415926535897

$rectangle = new Rectangle(4, 6);
echo "Rectangle Area: " . $rectangle->area() . "\n"; // Output: Rectangle Area: 24
echo "Rectangle Perimeter: " . $rectangle->perimeter() . "\n"; // Output: Rectangle Perimeter: 20

?>