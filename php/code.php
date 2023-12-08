<?php
session_start();
require './dbcon.php';

if(isset($_POST['delete_customer'])){
    $customer_id = mysqli_real_escape_string($con, $_POST['delete_customer']);

    $query = "DELETE FROM customer WHERE id='$customer_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "Appointment Successfully Removed";
        header("Location: dashboard.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Appointment Not Deleted";
        header("Location: dashboard.php");
        exit(0);
    }
}

if(isset($_POST['delete_customer-admin'])){
    $customer_id = mysqli_real_escape_string($con, $_POST['delete_customer-admin']);

    $query = "DELETE FROM customer WHERE id='$customer_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "Appointment Successfully Removed";
        header("Location: dashboard-admin.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Appointment Not Deleted";
        header("Location: dashboard-admin.php");
        exit(0);
    }
}

if(isset($_POST['delete_barbers'])){
    $barbers_id = mysqli_real_escape_string($con, $_POST['delete_barbers']);

    $query = "DELETE FROM barbers WHERE id='$barbers_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "Successfully Removed";
        header("Location: dashboard-admin.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Data Not Deleted";
        header("Location: dashboard-admin.php");
        exit(0);
    }
}

if(isset($_POST['delete_barbers-admin'])){
    $barbers_id = mysqli_real_escape_string($con, $_POST['delete_barbers-admin']);

    $query = "DELETE FROM barbers WHERE id='$barbers_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $_SESSION['message'] = "Successfully Removed";
        header("Location: dashboard-admin.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Data Not Deleted";
        header("Location: dashboard-admin.php");
        exit(0);
    }
}

if(isset($_POST['save_customer'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $query = "INSERT INTO customer (name,phone,address) VALUES 
        ('$name','$phone','$address')";

    $query_run = mysqli_query($con, $query);
    if ($query_run){
        $_SESSION['message'] = "Appointment Set!";
        header("Location: customer-create.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Appointment Not Created";
        header("Location: customer-create.php");
        exit(0);
    }
}

if(isset($_POST['save_barber'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "INSERT INTO barbers (name,email,phone,password) VALUES 
        ('$name','$email','$phone','$password')";

    $query_run = mysqli_query($con, $query);
    if ($query_run){
        $_SESSION['message'] = "Account Created! Welcome Barber!";
        header("Location: barber-create.php");
        exit(0);
    }
    else{
        $_SESSION['message'] = "Account Not Created";
        header("Location: barber-create.php");
        exit(0);
    }
}

?>