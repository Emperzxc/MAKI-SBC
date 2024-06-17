<?php
session_start();
$received_data = json_decode(file_get_contents("php://input"));


$errors = array();
if(isset($_FILES['image'])){
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

    if($file_size > 2097152){
        $errors[]='File size must be less than 2 MB';
    }

    if(empty($errors)==true){
        $unique_file_name = time().'.'. $file_ext;
        
        if (rename($file_tmp, "../assets/images/". $unique_file_name)) {
            echo json_encode($unique_file_name);
        } else {
            $errors[] = "Failed to rename the file.";
        }
    }else{
        print_r($errors);
    }
}
// echo json_encode( $unique_file_name );
?>