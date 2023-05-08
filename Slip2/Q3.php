<?php
// Define the Shape interface
interface Shape {
  public function area();
  public function volume();
}

// Define the constant PI
define('PI', 3.14159265359);

// Define the Cylinder class
class Cylinder implements Shape {
  private $radius;
  private $height;

  // Constructor
  public function __construct($radius, $height) {
    $this->radius = $radius;
    $this->height = $height;
  }

  // Calculate the area of the cylinder
  public function area() {
    return 2 * PI * $this->radius * ($this->radius + $this->height);
  }

  // Calculate the volume of the cylinder
  public function volume() {
    return PI * $this->radius * $this->radius * $this->height;
  }
}

// Create a new cylinder object
$cylinder = new Cylinder(3, 5);

// Print the area and volume of the cylinder
echo "Cylinder Area: " . $cylinder->area() . "<br>";
echo "Cylinder Volume: " . $cylinder->volume() . "<br>";
?>
