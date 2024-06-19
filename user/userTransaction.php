<?php
session_start();

$role = $_SESSION['user_role'];

if(!isset($role)){
  header("Location: ../");
}


?>