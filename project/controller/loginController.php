<?php
session_start();
// login.php (Controller)
require_once '../model/userModel.php';

// get the email and the password
$email = $_POST['email'];
$password = $_POST['password'];

//check if the field are not empty
foreach ($_POST as $key => $value)
{
    //if any value sent via POST is not filled
    if($value === '')
    {
        header("Location: ../viewer/login.php");
        exit();
    }
        
}

//if the fields are all filled, check credentials 

$userModel = new UserModel();

if ($userModel->validateUser($email, $password)) 
{
    $_SESSION["email"] = $email;
    header("Location: ../viewer/dashboard.php");
    exit();
} 
else 
{
    $_SESSION["error"] = "Incorrect email or password!";
    header("Location: ../viewer/login.php");
    exit();
}
?>