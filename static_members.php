<?php
// Demonstration of static members in PHP

class MyClass {
    // Static property
    public static $staticProperty = "I am a static property.";

    // Static method
    public static function staticMethod() {
        return "I am a static method.";
    }

    // Non-static property
    public $nonStaticProperty = "I am a non-static property.";

    // Non-static method
    public function nonStaticMethod() {
        return "I am a non-static method.";
    }
}

// Access static property and method without creating an instance
echo "Static Property: " . MyClass::$staticProperty . "\n";
echo "Static Method: " . MyClass::staticMethod() . "\n";

// Create instances of the class
$obj1 = new MyClass();
$obj2 = new MyClass();

// Access non-static property and method through instances
echo "Non-Static Property (obj1): " . $obj1->nonStaticProperty . "\n";
echo "Non-Static Method (obj1): " . $obj1->nonStaticMethod() . "\n";

// Static property is shared among all instances
MyClass::$staticProperty = "Updated static property.";

// Access static property through instances
echo "Static Property (obj2): " . $obj2::$staticProperty . "\n";
?>
