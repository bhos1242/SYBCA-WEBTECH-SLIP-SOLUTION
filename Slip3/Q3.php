<!-- Q2. Write a PHP script to create a Class shape and its subclass triangle, square and display
area of the selected shape.( use the concept of Inheritance) . Display menu (use radio button)
a)
b)
c)
Triangle
Square
Rectangle
d)
Circle -->

<!DOCTYPE html>
<html>
<head>
    <title>Shape Area Calculator</title>
</head>
<body>
    <h2>Select a shape to calculate its area:</h2>
    <form method="post">
        <input type="radio" name="shape" value="triangle">Triangle<br>
        <input type="radio" name="shape" value="square">Square<br>
        <input type="radio" name="shape" value="rectangle">Rectangle<br>
        <input type="radio" name="shape" value="circle">Circle<br><br>
        <input type="submit" name="submit" value="Calculate Area">
    </form>

    <?php
    // Define the Shape class
    class Shape {
        protected $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function getArea() {
            return "Area of {$this->name} not calculated.";
        }
    }

    // Define the Triangle class as a subclass of Shape
    class Triangle extends Shape {
        protected $base;
        protected $height;

        public function __construct($base, $height) {
            parent::__construct("Triangle");
            $this->base = $base;
            $this->height = $height;
        }

        public function getArea() {
            return "Area of Triangle: " . 0.5 * $this->base * $this->height;
        }
    }

    // Define the Square class as a subclass of Shape
    class Square extends Shape {
        protected $side;

        public function __construct($side) {
            parent::__construct("Square");
            $this->side = $side;
        }

        public function getArea() {
            return "Area of Square: " . pow($this->side, 2);
        }
    }

    // Define the Rectangle class as a subclass of Shape
    class Rectangle extends Shape {
        protected $length;
        protected $width;

        public function __construct($length, $width) {
            parent::__construct("Rectangle");
            $this->length = $length;
            $this->width = $width;
        }

        public function getArea() {
            return "Area of Rectangle: " . $this->length * $this->width;
        }
    }

    // Define the Circle class as a subclass of Shape
    class Circle extends Shape {
        protected $radius;

        public function __construct($radius) {
            parent::__construct("Circle");
            $this->radius = $radius;
        }

        public function getArea() {
            return "Area of Circle: " . pi() * pow($this->radius, 2);
        }
    }

    // Handle form submission
    if(isset($_POST['submit'])) {
        $shape = $_POST['shape'];
        $area = "";
        switch($shape) {
            case 'triangle':
                $triangle = new Triangle(10, 5);
                $area = $triangle->getArea();
                break;
            case 'square':
                $square = new Square(8);
                $area = $square->getArea();
                break;
            case 'rectangle':
                $rectangle = new Rectangle(12, 6);
                $area = $rectangle->getArea();
                break;
            case 'circle':
                $circle = new Circle(4);
                $area = $circle->getArea();
                break;
            }
      }