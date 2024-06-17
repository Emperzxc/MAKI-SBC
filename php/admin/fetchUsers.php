<?php
$conn = new PDO("mysql:host=localhost;dbname=sbc_inventory", "root", "");

$received_data = json_decode(file_get_contents("php://input"));

$data = array();

    $query = " SELECT *
    FROM users
    WHERE role = 'user' OR role = 'staff'";
    
    $statement = $conn->prepare($query);
    $statement->execute();
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);
?>