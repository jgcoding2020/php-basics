<?php
// Demonstration of all types of encapsulation

class MyClass {
    // Public property and method
    public $publicProperty = "I am a public property.";

    public function publicMethod() {
        echo "This is a public method.\n";
    }

    // Private property and method
    private $privateProperty = "I am a private property.";

    private function privateMethod() {
        echo "This is a private method.\n";
    }

    // Protected property and method
    protected $protectedProperty = "I am a protected property.";

    protected function protectedMethod() {
        echo "This is a protected method.\n";
    }

    // Constructor
    public function __construct() {
        echo "Constructor called.\n";
    }

    // Demonstrate encapsulation
    public function demonstrateEncapsulation() {
        echo "Accessing public property: " . $this->publicProperty . "\n";
        $this->publicMethod();

        // Attempt to access private property and method (will cause an error)
        // echo "Accessing private property: " . $this->privateProperty . "\n";
        // $this->privateMethod();

        // Attempt to access protected property and method (will cause an error)
        // echo "Accessing protected property: " . $this->protectedProperty . "\n";
        // $this->protectedMethod();
    }
}

// Create an instance of MyClass
$obj = new MyClass();

// Demonstrate encapsulation
$obj->demonstrateEncapsulation();
?>
