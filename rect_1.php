<?php

class Rectangle {
    private $length;
    private $width;

    public function __construct($width, $length) {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }

    public function getParimeter() {
        return 2 * ($this->width + $this-> length);
    }



}

$rectangle = new Rectangle(3, 4);
echo "Area: " . $rectangle -> getArea() . "</br>";
echo "Perimeter " . $rectangle -> getParimeter() . "</br>";

?>