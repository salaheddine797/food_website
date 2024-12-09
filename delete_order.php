<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "restaurant_orders"; // Replace with your database name

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the order ID from the request
$order_id = $_GET['id'];

// Delete the order from the database
$sql = "DELETE FROM orders WHERE id = $order_id";
$response = ["success" => false];

if ($conn->query($sql) === TRUE) {
    $response["success"] = true;
}

header('Content-Type: application/json');
echo json_encode($response);

// Close the connection
$conn->close();
?>
