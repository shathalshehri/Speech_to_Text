<?php
// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection parameters
$servername = "localhost"; // Your database server name
$username = "username";    // Your database username
$password = "password";    // Your database password
$db = "database_name";     // Your database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $db);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare an SQL statement to insert data into the 'remote' table
$stmt = $conn->prepare("INSERT INTO remote (directions) VALUES (?)");
$stmt->bind_param("s", $direction);

// Initialize the variable to hold the direction value
$direction = null;

// Handle POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check which button was clicked and assign the corresponding direction
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

    // Debugging: Output the direction value before inserting into the database
    echo "Direction: $direction<br>";

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "Record inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
