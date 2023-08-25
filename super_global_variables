
<?php
// Demonstrating superglobal variables

// 1. $_GET - Access data sent via HTTP GET request
echo "<h2>1. \$_GET</h2>";
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "Hello, $name!";
} else {
    echo "Please provide a 'name' parameter in the URL.";
}

// 2. $_POST - Access data sent via HTTP POST request
echo "<h2>2. \$_POST</h2>";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        echo "You submitted the email: $email";
    } else {
        echo "Please submit a valid email.";
    }
}

// 3. $_REQUEST - Access data sent via both GET and POST requests
echo "<h2>3. \$_REQUEST</h2>";
if (isset($_REQUEST['favorite_color'])) {
    $color = $_REQUEST['favorite_color'];
    echo "Your favorite color is: $color";
} else {
    echo "Please provide your favorite color.";
}

// 4. $_SESSION - Access and manage session data
echo "<h2>4. \$_SESSION</h2>";
session_start();
if (isset($_SESSION['user'])) {
    echo "Welcome back, " . $_SESSION['user'];
} else {
    $_SESSION['user'] = "Guest";
    echo "You are logged in as a guest.";
}

// 5. $_COOKIE - Access data stored in cookies
echo "<h2>5. \$_COOKIE</h2>";
if (isset($_COOKIE['user'])) {
    echo "Hello, " . $_COOKIE['user'];
} else {
    echo "No user cookie found.";
}

// 6. $_SERVER - Access server-related information
echo "<h2>6. \$_SERVER</h2>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

// 7. $_FILES - Access information about uploaded files
echo "<h2>7. \$_FILES</h2>";
echo "Upload a file:";
echo '<form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file_upload">
        <input type="submit" value="Upload">
      </form>';

if ($_FILES) {
    $file = $_FILES['file_upload'];
    echo "Uploaded file name: " . $file['name'];
}

?>