<?php
// Demonstration of all types of constructors

class MyClass {
    // Default Constructor
    public function __construct() {
        echo "Default Constructor called.\n";
    }

    // Parameterized Constructor
    public function __construct_param($param) {
        echo "Parameterized Constructor called with parameter: $param.\n";
    }

    // Constructor Overloading
    public function __construct_overload() {
        $args = func_get_args();
        $numArgs = func_num_args();

        if ($numArgs == 0) {
            echo "Constructor Overloading: Default Constructor called.\n";
        } else {
            $params = implode(', ', $args);
            echo "Constructor Overloading: Constructor with arguments called: $params.\n";
        }
    }
}

// Create instances using different constructors
$obj1 = new MyClass();
$obj2 = new MyClass(42);
$obj3 = new MyClass("Hello", "World", 123);

?>
