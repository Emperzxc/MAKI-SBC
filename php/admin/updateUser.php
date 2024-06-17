<?php
$conn = new PDO("mysql:host=localhost;dbname=sbc_inventory", "root", "");
$received_data = json_decode(file_get_contents("php://input"), true);

// Extract the necessary data from the decoded JSON
$user_id = $received_data['id']; // Assuming 'id' is the unique identifier for the user
$fname = $received_data['fname'];
$lname = $received_data['lname'];
$role = $received_data['role'];

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

// Prepare the SQL statement for updating a user
$updateQuery = "UPDATE users SET user_id=:id, firstName=:fname, lastName=:lname, role=:role WHERE user_id=:id";

// Prepare the statement
$stmt = $conn->prepare($updateQuery);

// Bind the parameters to prevent SQL injection
$stmt->bindParam(':id', $user_id); 
$stmt->bindParam(':fname', $fname);
$stmt->bindParam(':lname', $lname);
$stmt->bindParam(':role', $role);

// Execute the statement
if ($stmt->execute()) {
    // If the update was successful, return a success message
    echo json_encode(['success' => true, 'message' => 'Updated Successfully']);
} else {
    // If there was an error, return an error message
    echo json_encode(['success' => false, 'error' => 'Failed to update user', 'message' => 'Update Failed']);
}
