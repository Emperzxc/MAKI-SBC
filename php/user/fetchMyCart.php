<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=sbc_inventory", "root", "");
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: ". $e->getMessage();
    exit;
}
$received_data = json_decode(file_get_contents("php://input"));
$uid = $received_data->uid;
$data = array();

    $query = "SELECT *  FROM cart WHERE user_id = '$uid' ORDER BY created_at";
    $statement = $conn->prepare($query);
    $statement->execute();
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);
?>