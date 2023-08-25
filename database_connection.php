<?php
// Database Interaction Demo

// 1. Connecting to the Database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "1. Connected to the database successfully\n";

// 2. Querying Data
echo "2. Querying Data:\n";
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . ", Name: " . $row["name"] . ", Email: " . $row["email"] . "\n";
    }
} else {
    echo "No results found.\n";
}

// 3. Inserting Data
echo "3. Inserting Data:\n";
$newName = "New User";
$newEmail = "newuser@example.com";
$sql = "INSERT INTO users (name, email) VALUES ('$newName', '$newEmail')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully\n";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error . "\n";
}

// 4. Updating Data
echo "4. Updating Data:\n";
$updateId = 1;
$updateName = "Updated User";
$sql = "UPDATE users SET name='$updateName' WHERE id=$updateId";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully\n";
} else {
    echo "Error updating record: " . $conn->error . "\n";
}

// 5. Deleting Data
echo "5. Deleting Data:\n";
$deleteId = 2;
$sql = "DELETE FROM users WHERE id=$deleteId";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully\n";
} else {
    echo "Error deleting record: " . $conn->error . "\n";
}

// 6. Closing the Connection
$conn->close();
echo "6. Connection closed\n";
?>
