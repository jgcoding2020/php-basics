<?php
// This script demonstrates basic concatenation methods for strings.

// Using the dot (.) operator to concatenate strings
$firstName = "John";
$lastName = "Doe";
$fullName = $firstName . " " . $lastName;
echo "Full Name: " . $fullName . "<br>";

// Using the .= operator to append to a string
$greeting = "Hello, ";
$greeting .= $firstName;
$greeting .= "!";
echo $greeting . "<br>";

// Using double quotes to interpolate variables
$age = 30;
$message = "I am $age years old.";
echo $message . "<br>";

// Using the curly braces {} for complex variable interpolation
$number = 42;
echo "The value of {$number}nd item is something.<br>";
?>
