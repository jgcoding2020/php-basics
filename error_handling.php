<?php
// Demonstrating error handling and exception handling

// 1. Basic Error Handling
echo "1. Basic Error Handling:\n";
$number = 10;
$divider = 0;

if ($divider == 0) {
    echo "Division by zero is not allowed.\n";
} else {
    $result = $number / $divider;
    echo "Result of division: $result\n";
}

// 2. Custom Error Handling Function
echo "2. Custom Error Handling Function:\n";
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "Custom Error: [$errno] $errstr\n";
}

set_error_handler("customErrorHandler");
echo $undefinedVariable; // This will trigger an error

// 3. Exception Handling
echo "3. Exception Handling:\n";
function divide($a, $b) {
    if ($b == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $a / $b;
}

try {
    $result = divide(10, 0);
    echo "Result of division: $result\n";
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage() . "\n";
}

// 4. Error Reporting Level
echo "4. Error Reporting Level:\n";
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo $undefinedVariable; // This will display an error message

// 5. Error Suppression Operator (@)
echo "5. Error Suppression Operator (@):\n";
$result = @divide(10, 0); // The error is suppressed

if ($result === false) {
    echo "Error suppressed. Division by zero attempted.\n";
}
?>
