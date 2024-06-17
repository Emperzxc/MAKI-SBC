<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=sbc_inventory", "root", "");
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: ". $e->getMessage();
    exit;
}


// SQL query to fetch orders
$sql = "SELECT * FROM products ORDER BY prod_name" ;
$stmt = $conn->prepare($sql);
$stmt->execute();

// Fetching orders
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Close the connection
$conn = null;

// Convert the aggregated data to JSON
$jsonData = json_encode($orders);

echo $jsonData;
