<?php  
session_start();
include('dbcon.php');
$email = $_POST['email'];
$password = $_POST['password'];

    $email = stripcslashes($email);
    $password = stripcslashes($password);
    $email = mysqli_real_escape_string($con, $email);
    $password = mysqli_real_escape_string($con, $password);

    $sql = "SELECT *FROM barbers WHERE email = '$email' and password = '$password' ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
        header("Location: dashboard.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Invalid email or password";
        header("Location: barber-login.php");
        exit(0);
    }
?>