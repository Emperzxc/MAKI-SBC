<?php
$conn = new PDO("mysql:host=localhost;dbname=sbc_inventory", "root", "");
$received_data = json_decode(file_get_contents("php://input"), true);

// Extract the necessary data from the decoded JSON
$id = $received_data['id'];
$fname = $received_data['fname'];
$lname = $received_data['lname'];
$role = $received_data['role'];
$password = $received_data['password'];

// Split the firstName and lastName into words
$fnameWords = explode(' ', $fname);
$lnameWords = explode(' ', $lname);

// Apply title case to each word in firstName and lastName
foreach ($fnameWords as &$word) {
    $word = ucfirst(strtolower($word));
}
unset($word); // Unset the reference to avoid unexpected behavior

foreach ($lnameWords as &$word) {
    $word = ucfirst(strtolower($word));
}
unset($word); // Unset the reference to avoid unexpected behavior

// Reconstruct the firstName and lastName strings
$fname = implode(' ', $fnameWords);
$lname = implode(' ', $lnameWords);

// Check if the user_id already exists
$queryCheck = "SELECT * FROM users WHERE user_id = :id";
$stmtCheck = $conn->prepare($queryCheck);
$stmtCheck->bindParam(':id', $id);
$stmtCheck->execute();

// If the user_id exists, do not insert and return a message
if ($stmtCheck->rowCount() > 0) {
    echo json_encode(['success' => false, 'message' => 'User ID already taken.']);
    exit(); // Exit the script to prevent further execution
}

// Prepare the SQL statement for inserting a new user
$insertQuery = "INSERT INTO users (user_id, firstName, lastName, role, password) VALUES (:id, :fname, :lname, :role, :password)";

// Prepare the statement
$stmt = $conn->prepare($insertQuery);

// Bind the parameters to prevent SQL injection
$stmt->bindParam(':id', $id);
$stmt->bindParam(':fname', $fname);
$stmt->bindParam(':lname', $lname);
$stmt->bindParam(':role', $role);
$stmt->bindParam(':password', $password);

// Execute the statement
if ($stmt->execute()) {
    // If the insertion was successful, return a success message
    echo json_encode(['success' => true, 'message' => 'Inserted Successfully']);
} else {
    // If there was an error, return an error message
    echo json_encode(['success' => false, 'error' => 'Failed to add user', 'message' => 'Insertion Failed']);
}
?>
