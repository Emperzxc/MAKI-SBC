<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=sbc_inventory", "root", "");
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: ". $e->getMessage();
    exit;
}

// Get the item IDs from the request
$itemIds = json_decode(file_get_contents('php://input'), true)['itemIds'];

// Prepare the SQL statement
$stmt = $conn->prepare("DELETE FROM cart WHERE id = :id");

// Loop through each item ID and execute the statement
foreach ($itemIds as $id) {
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}

// Return a response
echo json_encode(['success' => true]);
?>
