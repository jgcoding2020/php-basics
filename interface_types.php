<?php
// Demonstration of interfaces in PHP

// Interface definition
interface Logger {
    public function log($message);
}

// Class implementing a single interface
class FileLogger implements Logger {
    public function log($message) {
        // Log message to a file
        echo "Logging to a file: $message\n";
    }
}

// Class implementing multiple interfaces
interface Notifier {
    public function sendNotification($message);
}

class EmailNotifier implements Logger, Notifier {
    public function log($message) {
        // Log message to an email
        echo "Logging to an email: $message\n";
    }

    public function sendNotification($message) {
        // Send an email notification
        echo "Sending an email notification: $message\n";
    }
}

// Create instances of classes implementing interfaces
$fileLogger = new FileLogger();
$emailNotifier = new EmailNotifier();

// Use the interface methods
$fileLogger->log("Error: File not found");
$emailNotifier->log("Warning: Low disk space");
$emailNotifier->sendNotification("Important update available");

// Attempt to create an instance of an interface (will cause an error)
// $logger = new Logger();
?>
