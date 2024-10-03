<?php
interface Shape {
    public function calculateArea();
}

abstract class Figure {
    abstract public function getName();
}

class Circle extends Figure implements Shape {
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getName() {
        return "Circle";
    }
}

class Rectangle extends Figure implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }

    public function getName() {
        return "Rectangle";
    }
}

// Contoh penggunaan
$circle = new Circle(5);
$rectangle = new Rectangle(4,6);

echo "Luas lingkaran: ". $circle->calculateArea()."\n";
echo "Nama bangun datar: ". $circle->getName()."\n";
echo "Luas persegi panjang: ". $rectangle->calculateArea()."\n";
echo "Nama bangun datar: ". $rectangle->getName()."\n";