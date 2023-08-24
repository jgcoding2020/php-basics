<?php
// Indexed Array
$fruits = array("apple", "banana", "cherry", "date");

// Associative Array
$person = array(
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30,
    "city" => "New York"
);

// Multidimensional Array (Indexed)
$students = array(
    array("John", "Doe", 25),
    array("Alice", "Smith", 22),
    array("Bob", "Johnson", 28)
);

// Multidimensional Array (Associative)
$employees = array(
    array("first_name" => "Sarah", "last_name" => "Brown", "position" => "Manager"),
    array("first_name" => "Michael", "last_name" => "Smith", "position" => "Developer"),
    array("first_name" => "Emily", "last_name" => "Johnson", "position" => "Designer")
);

// Displaying Indexed Array
echo "Fruits: ";
print_r($fruits);
echo "<br>";

// Displaying Associative Array
echo "Person: ";
print_r($person);
echo "<br>";

// Displaying Multidimensional Array (Indexed)
echo "Students: ";
print_r($students);
echo "<br>";

// Displaying Multidimensional Array (Associative)
echo "Employees: ";
print_r($employees);
echo "<br>";

// Accessing Array Elements
echo "First Fruit: " . $fruits[0] . "<br>";
echo "Last Name: " . $person["last_name"] . "<br>";
echo "Age of the first student: " . $students[0][2] . "<br>";
echo "Position of the second employee: " . $employees[1]["position"] . "<br>";

// Modifying Array Elements
$fruits[0] = "orange";
$person["age"] = 35;

// Adding Elements to an Array
$fruits[] = "grape";
$person["gender"] = "male";

// Removing Elements from an Array
unset($fruits[2]);
unset($person["city"]);

// Displaying Modified Arrays
echo "Modified Fruits: ";
print_r($fruits);
echo "<br>";

echo "Modified Person: ";
print_r($person);
echo "<br>";
?>
