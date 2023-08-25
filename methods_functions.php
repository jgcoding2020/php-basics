<?php
// Demonstration of all types of methods

class MyClass {
    // Public method
    public function regularMethod() {
        echo "This is a regular method.\n";
    }

    // Static method
    public static function staticMethod() {
        echo "This is a static method.\n";
    }

    // Constructor (magic method)
    public function __construct() {
        echo "Constructor called (magic method).\n";
    }

    // Destructor (magic method)
    public function __destruct() {
        echo "Destructor called (magic method).\n";
    }

    // Magic method __toString
    public function __toString() {
        return "This is the __toString magic method.\n";
    }

    // Magic method __call
    public function __call($name, $arguments) {
        echo "Calling undefined method: $name with arguments: " . implode(', ', $arguments) . "\n";
    }
}

// Create an instance of MyClass
$obj = new MyClass();

// Call regular method
$obj->regularMethod();

// Call static method
MyClass::staticMethod();

// Destructor is automatically called when the script ends or when unset($obj) is used

// Convert object to string (implicitly calls __toString)
echo $obj;

// Call undefined method (implicitly calls __call)
$obj->undefinedMethod("arg1", "arg2");
?>
