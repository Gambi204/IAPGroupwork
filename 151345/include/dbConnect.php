
<?php
$servername = "localhost "; // Replace with your MySQL server hostname
$username = "root";        // Replace with your MySQL username
$password = "";            // Replace with your MySQL password
$databaseName = "blog db"; // Replace with your database name

// Create a connection to MySQL
$conn = new mysqli($servername, $username, $password, $databaseName);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
