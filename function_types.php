<?php

// Function without Parameters and Return Value
function sayHello() {
    echo "Hello, World!<br>";
}

// Calling the Function
sayHello();

// Function with Parameters and Return Value
function add($a, $b) {
    return $a + $b;
}

// Calling the Function with Parameters
$result = add(5, 3);
echo "Addition Result: " . $result . "<br>";

// Function with Default Parameter Value
function greet($name = "Guest") {
    echo "Hello, " . $name . "!<br>";
}

// Calling the Function with Default and Custom Parameters
greet();
greet("John");

// Function with Variable-length Argument List
function sum(...$numbers) {
    $total = 0;
    foreach ($numbers as $num) {
        $total += $num;
    }
    return $total;
}

// Calling the Function with Variable Arguments
$total = sum(1, 2, 3, 4, 5);
echo "Sum: " . $total . "<br>";

// Anonymous Function (Closure)
$greetAnonymous = function () {
    echo "Hello from an anonymous function!<br>";
};

// Calling the Anonymous Function
$greetAnonymous();

?>
