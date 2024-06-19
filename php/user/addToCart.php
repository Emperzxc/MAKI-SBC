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
session_start();

$data = array();
// Generate a random 6-digit number
$random_value = $_SESSION['user_id'].mt_rand(100000, 999999);

// Append the random value to the order_id
$unique_order_id = $random_value;
$cart = $unique_order_id;
$pid = $received_data->pid;
$uname = $_SESSION['user_name'];
$uid = $_SESSION['user_id'];
$name = $received_data->name;
$price = $received_data->price;
$img = $received_data->img;

if ($uid &&!empty($received_data->pid)) {
    // Check if the product is already in the cart for the user
    $checkQuery = "SELECT * FROM cart WHERE prod_id = :pid AND user_id = :uid";
    $checkStatement = $conn->prepare($checkQuery);
    $checkStatement->bindParam(':pid', $pid);
    $checkStatement->bindParam(':uid', $uid);
    $checkStatement->execute();

    if ($checkStatement->rowCount() > 0) {
        // Product is already in the cart
        $data = array(
            'message' => 'Item already in your cart.',
        );
    } else {
        // Product is not in the cart, proceed with insertion
        $query = "INSERT INTO cart( prod_id, user_id, user_name,  prod_name, prod_price, prod_image) VALUES( :pid, :uid, :uname,   :name, :price, :img ) ";
        $statement = $conn->prepare($query);
        $statement->bindParam(':pid', $pid);
        $statement->bindParam(':uname', $uname);
        $statement->bindParam(':uid', $uid);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':price', $price);
        $statement->bindParam(':img', $img);
        $exe = $statement->execute();

        if ($exe) {
           $data = array(
                'message' => 'Added to cart!',
            );
        } else {
            $data = array(
                'message' => 'Unsuccessful, try again later',
            );
        }
    }
}else{
    $data = array(
        'message' => 'Empty product ID.',
    );
}

echo json_encode($data);
?>
