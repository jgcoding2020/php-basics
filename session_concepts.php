<?php
// Start a session
session_start();

// Demonstration of different types of sessions

// 1. Basic Session Variable
echo "1. Basic Session Variable:\n";
$_SESSION['username'] = 'john_doe';
echo "Username: " . $_SESSION['username'] . "\n";

// 2. Storing an Array in a Session
echo "2. Storing an Array in a Session:\n";
$_SESSION['user_info'] = array(
    'name' => 'John Doe',
    'email' => 'john@example.com'
);
echo "User Info:\n";
print_r($_SESSION['user_info']);
echo "\n";

// 3. Unset a Session Variable
echo "3. Unset a Session Variable:\n";
unset($_SESSION['username']);
echo "Username unset.\n";

// 4. Check if a Session Variable Exists
echo "4. Check if a Session Variable Exists:\n";
if (isset($_SESSION['user_info'])) {
    echo "User info exists in the session.\n";
} else {
    echo "User info does not exist in the session.\n";
}

// 5. Destroy a Session
echo "5. Destroy a Session:\n";
session_destroy();
echo "Session destroyed.\n";

// 6. Session Timeout
echo "6. Session Timeout:\n";
session_start();
$_SESSION['timeout'] = time() + 60; // Session will expire in 60 seconds

if (isset($_SESSION['timeout']) && time() > $_SESSION['timeout']) {
    echo "Session has expired.\n";
} else {
    echo "Session is still active.\n";
}

// 7. Regenerate Session ID
echo "7. Regenerate Session ID:\n";
session_regenerate_id();
echo "Session ID regenerated.\n";

?>
