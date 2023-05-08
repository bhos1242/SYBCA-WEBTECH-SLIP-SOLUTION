<!-- Q2. Write PHP script to demonstrate the concept of introspection for examining object. -->

<?php

class Person {
    public $name;
    protected $age;
    private $email;

    public function __construct($name, $age, $email) {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    public function introduce() {
        echo "Hi, my name is $this->name. I am $this->age years old.";
    }

    private function getEmail() {
        return $this->email;
    }
}

$person = new Person("John Doe", 25, "johndoe@example.com");

// get class name
echo "Class name: " . get_class($person) . "<br>";

// check if object is instance of a class
if ($person instanceof Person) {
    echo "Object is an instance of Person class.<br>";
}

// get object properties
$properties = get_object_vars($person);
echo "Object properties: <br>";
foreach ($properties as $property => $value) {
    echo "$property: $value <br>";
}

// get class methods
$methods = get_class_methods($person);
echo "Class methods: <br>";
foreach ($methods as $method) {
    echo "$method <br>";
}

// check if a method exists
if (method_exists($person, "introduce")) {
    echo "introduce method exists.<br>";
}

// get method visibility
$reflector = new ReflectionClass("Person");
$method = $reflector->getMethod("getEmail");
if ($method->isPrivate()) {
    echo "getEmail method is private.<br>";
}

?>
