<?php
// This is a single-line comment

/*
   This is a multi-line comment
   PHP code can be embedded within HTML.
   Let's demonstrate various types of output.
*/

// Using echo to display text
echo "Hello, World!<br>";

// Using print to display text
print "This is a print statement.<br>";

// Storing output in a variable
$message = "Welcome to PHP!";

// Displaying the variable content
echo $message . "<br>";

// Concatenating strings
$first_name = "John";
$last_name = "Doe";
echo "Full Name: " . $first_name . " " . $last_name . "<br>";

// Using print for variables
print "Age: ";
$age = 30;
print $age . "<br>";

// Using print for a boolean variable
$is_student = true;
print "Is Student: ";
print $is_student ? "Yes" : "No";

/*
   PHP can also be used to generate HTML tags.
   This is especially useful for dynamically generating web content.
*/

// Generating an HTML link
echo "<a href='https://www.example.com'>Visit Example</a>";

?>
