<?php
// Integer variable
$integerVar = 42;

// Floating-point variable
$floatVar = 3.14;

// String variable
$stringVar = "Hello, World!";

// Boolean variable
$boolVar = true;

// Indexed array
$arrayVar = array(1, 2, 3, 4, 5);

// Associative array
$assocArrayVar = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);

// Object variable (creating a simple class)
class Person {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}
$objectVar = new Person("Alice", 25);

// NULL variable
$nullVar = null;

// Resource variable (not typically used directly in scripts)
$file = fopen("example.txt", "r");
$resourceVar = $file;

// Display variables
echo "Integer Variable: " . $integerVar . "<br>";
echo "Float Variable: " . $floatVar . "<br>";
echo "String Variable: " . $stringVar . "<br>";
echo "Boolean Variable: " . ($boolVar ? "true" : "false") . "<br>";
echo "Indexed Array Variable: ";
print_r($arrayVar);
echo "<br>";
echo "Associative Array Variable: ";
print_r($assocArrayVar);
echo "<br>";
echo "Object Variable: " . $objectVar->name . ", " . $objectVar->age . "<br>";
echo "NULL Variable: " . var_export($nullVar, true) . "<br>";
echo "Resource Variable: " . get_resource_type($resourceVar) . "<br>";

// Closing the resource (file) - important to release resources
fclose($resourceVar);
?>
