<?php
session_start();
// login.php (Controller)
require_once '../model/userModel.php';

$username = $_POST['username'];
$password = $_POST['password'];

$userModel = new UserModel();
if ($userModel->validateUser($username, $password)) 
{
    $_SESSION["username"] = $username;
    header("Location: ../viewer/dashboard.php");
} 
else 
{
    echo "Invalid credentials";
}
?>