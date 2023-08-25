<?php
// Demonstrating file handling operations

// 1. Reading a File
echo "<h2>1. Reading a File</h2>";
$filename = "sample.txt";

if (file_exists($filename)) {
    $content = file_get_contents($filename);
    echo "<pre>$content</pre>";
} else {
    echo "The file '$filename' does not exist.";
}

// 2. Writing to a File
echo "<h2>2. Writing to a File</h2>";
$newContent = "This is new content that will be written to the file.";

if (file_put_contents($filename, $newContent)) {
    echo "Content has been written to the file.";
} else {
    echo "Unable to write to the file.";
}

// 3. Appending to a File
echo "<h2>3. Appending to a File</h2>";
$appendContent = "\nThis content will be appended to the file.";

if (file_put_contents($filename, $appendContent, FILE_APPEND)) {
    echo "Content has been appended to the file.";
} else {
    echo "Unable to append to the file.";
}

// 4. Deleting a File
echo "<h2>4. Deleting a File</h2>";

if (unlink($filename)) {
    echo "The file has been deleted.";
} else {
    echo "Unable to delete the file.";
}

?>
