<?php
session_start();

$name = "";
$email = "";
$errors = array(); 
$_SESSION['success'] = "";

include("./config.php");

if(isset($_POST['submit']))
{
    $name = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['mobilephone'];
    $password = $_POST['password'];
    
    
    $query = "INSERT INTO users (username, email, mobilephone,password) VALUES ('$name', '$email', '$number','$password')";
    $result = mysqli_query($con, $query);

    if($result)
    {    
        $_SESSION['username'] = $name;
        $_SESSION['success'] = "You are now logged in";
        header("location: login.php?mes=<p class='correct'>Registration Successfully .please login Here</P>");
        exit();
    }
    else{
        echo "Error: " . mysqli_error($con);
    }
}
?>
