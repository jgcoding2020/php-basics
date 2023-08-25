<?php
// Demonstration of different types of cookies

// 1. Basic Cookie
echo "1. Basic Cookie:\n";
setcookie("username", "john_doe", time() + 3600); // Expires in 1 hour
echo "Username cookie set.\n";

// 2. Storing an Array in a Cookie
echo "2. Storing an Array in a Cookie:\n";
$userInfo = array(
    'name' => 'John Doe',
    'email' => 'john@example.com'
);
setcookie("user_info", serialize($userInfo), time() + 3600); // Expires in 1 hour
echo "User info cookie set.\n";

// 3. Retrieving and Displaying Cookies
echo "3. Retrieving and Displaying Cookies:\n";
if (isset($_COOKIE['username'])) {
    echo "Username: " . $_COOKIE['username'] . "\n";
} else {
    echo "Username cookie not set.\n";
}

if (isset($_COOKIE['user_info'])) {
    $userInfo = unserialize($_COOKIE['user_info']);
    echo "User Info:\n";
    print_r($userInfo);
} else {
    echo "User info cookie not set.\n";
}

// 4. Deleting a Cookie
echo "4. Deleting a Cookie:\n";
setcookie("username", "", time() - 3600); // Expire immediately
setcookie("user_info", "", time() - 3600); // Expire immediately
echo "Cookies deleted.\n";

?>
