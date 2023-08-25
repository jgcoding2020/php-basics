<?php
// Demonstrating common security practices

// 1. Input Validation
echo "1. Input Validation:\n";
$email = $_GET['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Valid email: $email\n";
} else {
    echo "Invalid email: $email\n";
}

// 2. Authentication
echo "2. Authentication:\n";
$username = "user";
$password = "password123";

if ($_POST['username'] === $username && $_POST['password'] === $password) {
    echo "Authentication successful.\n";
} else {
    echo "Authentication failed.\n";
}

// 3. Authorization
echo "3. Authorization:\n";
$role = "admin";
if ($role === "admin") {
    echo "You have admin privileges.\n";
} else {
    echo "You do not have admin privileges.\n";
}

// 4. SQL Injection Prevention
echo "4. SQL Injection Prevention:\n";
$id = $_GET['id'];
$id = intval($id); // Convert to integer to prevent SQL injection

// 5. Cross-Site Scripting (XSS) Prevention
echo "5. Cross-Site Scripting (XSS) Prevention:\n";
$userInput = "<script>alert('XSS Attack');</script>";
$filteredInput = htmlspecialchars($userInput);
echo "User Input: $filteredInput\n";

// 6. Password Hashing
echo "6. Password Hashing:\n";
$passwordToHash = "password123";
$hashedPassword = password_hash($passwordToHash, PASSWORD_BCRYPT);
echo "Hashed Password: $hashedPassword\n";

// 7. Secure Cookies
echo "7. Secure Cookies:\n";
setcookie("session_cookie", "value", time() + 3600, "/", "", true, true);

// 8. HTTPS Usage
echo "8. HTTPS Usage:\n";
if ($_SERVER['HTTPS']) {
    echo "Secure HTTPS connection.\n";
} else {
    echo "Insecure HTTP connection.\n";
}

?>
