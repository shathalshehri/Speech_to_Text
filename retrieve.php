<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Required variables to connect with the local database
$servername = "localhost";
$username = "root";
$password = "rootroot";
$db = "Robot";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO remote (directions) VALUES (?)");
$stmt->bind_param("s", $direction);

// Initialize variable
$direction = null;

// Handle POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle button click commands
    if (isset($_POST["Forward"])) {
        $direction = $_POST["Forward"];
    } elseif (isset($_POST["Backward"])) {
        $direction = $_POST["Backward"];
    } elseif (isset($_POST["Left"])) {
        $direction = $_POST["Left"];
    } elseif (isset($_POST["Right"])) {
        $direction = $_POST["Right"];
    } elseif (isset($_POST["Stop"])) {
        $direction = $_POST["Stop"];
    }

    // Debugging: Print values before insertion
    echo "Direction: $direction<br>";

    // Execute SQL if set
    if ($stmt->execute()) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
}

$stmt->close();
$conn->close();
?>
