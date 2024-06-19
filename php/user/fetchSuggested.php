<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=sbc_inventory", "root", "");
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: ". $e->getMessage();
    exit;
}

// Modified SQL query to fetch products along with their average rating
$sql =  "SELECT prod.*, IFNULL(AVG(IFNULL(rt.prod_rate, 0)), 0) AS avg_rating FROM products as prod 
LEFT JOIN ratings as rt ON prod.prod_id = rt.prod_id
WHERE prod.status = 'live'
GROUP BY prod.prod_id
ORDER BY prod.created_at LIMIT 3";

$stmt = $conn->prepare($sql);
$stmt->execute();

// Fetching orders with average ratings
$ordersWithAvgRatings = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Close the connection
$conn = null;

// Convert the aggregated data to JSON
$jsonData = json_encode($ordersWithAvgRatings);

echo $jsonData;
?>
