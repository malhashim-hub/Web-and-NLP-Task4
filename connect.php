<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['temperature']) && isset($_GET['humidity'])) {
    $temperature = $_GET['temperature'];        
    $humidity = $_GET['humidity'];
            
$servername = "localhost";
$username = "";
$password = "";
$dbname = "task4";

// Create a new MySQL connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare a SQL statement to insert the button value into a table
$stmt = $conn->prepare("INSERT INTO info (temperature, humidity) VALUES (?, ?)"); // table name, (column name), git the value from the web page

// Bind the button value to the prepared statement
$stmt->bind_param("ii", $temperature, $humidity); // i for integer

// Execute the prepared statement
$stmt->execute();

// Close the prepared statement and MySQL connection
$stmt->close();
$conn->close();


echo "successfully inserted "." <br>done. ";
        }
        ?>