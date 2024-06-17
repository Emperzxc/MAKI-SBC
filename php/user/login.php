<?php
$conn = new PDO("mysql:host=localhost;dbname=sbc_inventory", "root", "");

$received_data = json_decode(file_get_contents("php://input"));

$data = array();

$id = $received_data->id;
if ($id && !empty($received_data->password)) {
    $query = "SELECT * FROM users WHERE user_id = :id AND password = :password AND status = 'approved'";
    $statement = $conn->prepare($query);
    $statement->bindParam(':id', $id);
    $statement->bindParam(':password', $received_data->password);
    $statement->execute();

    if ($statement->rowCount() > 0) {
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            if ($user['role'] === 'user') {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_role'] = $user['role'];
                $_SESSION['user_name'] = $user['firstName'].' '.$user['lastName'];
                $data = array(
                    'login' => 'yes',
                    'message' => 'Login Success',
                    'role' => 'user'
                );
            } else if ($user['role'] === 'admin') {
                session_start();
                $_SESSION['admin_role'] = $user['role'];
                $_SESSION['admin_id'] = $user['id'];
                $_SESSION['admin_name'] = $user['firstName'].' '.$user['lastName'];
                $data = array(
                    'login' => 'yes',
                    'message' => 'Login Success',
                    'role' => 'admin'
                );
            }else if ($user['role'] === 'staff') {
                session_start();
                $_SESSION['staff_role'] = $user['role'];
                $_SESSION['staff_id'] = $user['id'];
                $_SESSION['staff_name'] = $user['firstName'].' '.$user['lastName'];
                $data = array(
                    'login' => 'yes',
                    'message' => 'Login Success',
                    'role' => 'staff'
                );
            }
        } else {
            $data = array(
                'login' => 'no',
                'message' => 'Invalid company ID or Password',
            );
        }
    } else {
        $data = array(
            'login' => 'no',
            'message' => 'Invalid company ID or Password',
        );
    }
}

echo json_encode($data);
?>