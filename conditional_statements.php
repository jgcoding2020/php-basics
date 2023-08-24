<?php

// If Statement
$age = 18;
if ($age >= 18) {
    echo "You are an adult.<br>";
}

// If-Else Statement
$temperature = 25;
if ($temperature > 30) {
    echo "It's hot outside.<br>";
} else {
    echo "It's not too hot.<br>";
}

// If-Elseif-Else Statement
$grade = 75;
if ($grade >= 90) {
    echo "You got an A.<br>";
} elseif ($grade >= 80) {
    echo "You got a B.<br>";
} elseif ($grade >= 70) {
    echo "You got a C.<br>";
} else {
    echo "You need to improve your grade.<br>";
}

// Switch Statement
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "It's the start of the workweek.<br>";
        break;
    case "Friday":
        echo "It's almost the weekend!<br>";
        break;
    default:
        echo "It's a regular day.<br>";
}

// Ternary Operator
$isAdult = ($age >= 18) ? "Yes" : "No";
echo "Is Adult: " . $isAdult . "<br>";

// Null Coalescing Operator (??)
$myVar = $nonExistentVar ?? "Default Value";
echo "Null Coalescing Operator: " . $myVar . "<br>";

// Spaceship Operator (<=>)
$num1 = 10;
$num2 = 5;
$comparison = $num1 <=> $num2;
echo "Spaceship Operator: " . $comparison . "<br>";

?>
