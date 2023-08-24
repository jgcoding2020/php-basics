<?php

// For Loop
echo "For Loop: ";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "<br>";

// While Loop
echo "While Loop: ";
$j = 1;
while ($j <= 5) {
    echo $j . " ";
    $j++;
}
echo "<br>";

// Do...While Loop
echo "Do...While Loop: ";
$k = 1;
do {
    echo $k . " ";
    $k++;
} while ($k <= 5);
echo "<br>";

// Indexed Array
$fruits = array("apple", "banana", "cherry", "date");

// Foreach Loop (Indexed Array)
echo "Foreach Loop (Indexed Array): ";
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}
echo "<br>";

// Associative Array
$person = array(
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30,
    "city" => "New York"
);

// Foreach Loop (Associative Array)
echo "Foreach Loop (Associative Array): ";
foreach ($person as $key => $value) {
    echo $key . ": " . $value . " ";
}
echo "<br>";

?>
