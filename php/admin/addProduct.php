<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=sbc_inventory", "root", "");
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: ". $e->getMessage();
    exit;
}

// Function to insert a new product
function insertProduct($conn, $data) {
    global $prod_name, $prod_price, $prod_image, $prod_qty;

    // Extract data from the passed array
    extract($data);

    // Prepare the SQL statement for inserting
    $sql = "INSERT INTO products (prod_name, prod_price, prod_image, prod_qty) VALUES (:prod_name, :prod_price, :prod_image, :prod_qty)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':prod_name', $prod_name);
    $stmt->bindParam(':prod_price', $prod_price);
    $stmt->bindParam(':prod_image', $prod_image);
    $stmt->bindParam(':prod_qty', $prod_qty);

    if ($stmt->execute()) {
        return ['success' => true, 'message' => 'Product inserted successfully'];
    } else {
        return ['success' => false, 'message' => 'Failed to insert product'];
    }
}

// Example usage:
// Assuming you have JSON data coming from a POST request
$received_data = json_decode(file_get_contents("php://input"), true); // Changed to true to get an associative array

if (!empty($received_data['prod_name']) &&!empty($received_data['prod_price']) &&!empty($received_data['prod_image']) &&!empty($received_data['prod_qty'])) {
    $result = insertProduct($conn, $received_data);
    echo json_encode($result);
} else {
    echo json_encode(['error' => 'Required fields are missing in the request']);
}

// Close the connection
$conn = null;
