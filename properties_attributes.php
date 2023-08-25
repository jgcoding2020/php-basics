<?php
// Demonstration of all types of properties

class MyClass {
    // Public Property
    public $publicProperty = "I am a public property.";

    // Private Property
    private $privateProperty = "I am a private property.";

    // Protected Property
    protected $protectedProperty = "I am a protected property.";

    // Constructor
    public function __construct() {
        echo "Constructor called.\n";
    }

    // Method to access private property
    public function getPrivateProperty() {
        return $this->privateProperty;
    }

    // Method to access protected property
    public function getProtectedProperty() {
        return $this->protectedProperty;
    }

    // Method to change private property
    public function setPrivateProperty($value) {
        $this->privateProperty = $value;
    }

    // Method to change protected property
    public function setProtectedProperty($value) {
        $this->protectedProperty = $value;
    }
}

// Create an instance of MyClass
$obj = new MyClass();

// Access and display public property
echo "Public Property: " . $obj->publicProperty . "\n";

// Attempt to access private property (will cause an error)
// echo "Private Property: " . $obj->privateProperty . "\n";

// Access private property using a method
echo "Private Property (via method): " . $obj->getPrivateProperty() . "\n";

// Attempt to access protected property (will cause an error)
// echo "Protected Property: " . $obj->protectedProperty . "\n";

// Access protected property using a method
echo "Protected Property (via method): " . $obj->getProtectedProperty() . "\n";

// Change private property using a method
$obj->setPrivateProperty("Updated private property");
echo "Private Property (Updated): " . $obj->getPrivateProperty() . "\n";

// Change protected property using a method
$obj->setProtectedProperty("Updated protected property");
echo "Protected Property (Updated): " . $obj->getProtectedProperty() . "\n";
?>
