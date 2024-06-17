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

if (isset($received_data->prod_name, $received_data->prod_price, $received_data->prod_image)) {
    $prod_name = $received_data->prod_name;
    $prod_price = $received_data->prod_price;
    $prod_image = $received_data->prod_image;
    $prod_qty = $received_data->prod_qty;
    $id = $received_data->id; // Assuming the id is also sent in the request to identify which product to update

    // Prepare the SQL statement for updating
    $sql = "UPDATE products SET prod_name = :prod_name, prod_price = :prod_price, prod_image = :prod_image, prod_qty = :prod_qty WHERE prod_id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':prod_name', $prod_name);
    $stmt->bindParam(':prod_price', $prod_price);
    $stmt->bindParam(':prod_image', $prod_image);
    $stmt->bindParam(':prod_qty', $prod_qty);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Product updated successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update product']);
    }
} else {
    echo json_encode(['error' => 'Required fields are missing in the request']);
}

// Close the connection
$conn = null;
