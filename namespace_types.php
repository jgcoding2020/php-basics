<?php
// Demonstration of namespaces in PHP

// Define a namespace
namespace MyNamespace;

// Define a class within the namespace
class MyClass {
    public function sayHello() {
        return "Hello from MyClass in MyNamespace!";
    }
}

// Use the namespace when creating an instance
$obj = new MyClass();

// Access the class within the namespace
echo $obj->sayHello() . "\n";

// Access global namespace
$globalVar = "I am in the global namespace.";

namespace {
    echo $globalVar . "\n";
}

// Access a class in a different namespace
namespace AnotherNamespace {
    // Define another class within a different namespace
    class AnotherClass {
        public function sayHello() {
            return "Hello from AnotherClass in AnotherNamespace!";
        }
    }

    // Use the namespace when creating an instance
    $obj = new AnotherClass();

    // Access the class within the namespace
    echo $obj->sayHello() . "\n";

    // Access a class from the global namespace
    $globalObj = new \MyNamespace\MyClass();
    echo $globalObj->sayHello() . "\n";
}
?>
