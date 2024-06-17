<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=sbc_inventory", "root", "");
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: ". $e->getMessage();
    exit;
}

// Receive data from the request body
$received_data = json_decode(file_get_contents("php://input"));

if (isset($received_data->id)) {
    $id = $received_data->id;

    // SQL query to delete a user by its ID
    $sql = "DELETE FROM users WHERE user_id = :id";
    $stmt = $conn->prepare($sql);   
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); // Bind the parameter to prevent SQL injection

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Account deleted successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to delete account']);
    }
} else {
    echo json_encode(['error' => 'ID is missing in the request']);
}

// Close the connection
$conn = null;
