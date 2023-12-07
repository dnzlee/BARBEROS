<?php  
session_start();
require './dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Login Form</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #f2f2f2; 
    }

    #background-video {
      position: fixed;
      top: 0;
      left: 0;
      min-width: 100%;
      min-height: 100%;
      z-index: -1;
    }

    .login-container {
      background-color: rgba(255, 255, 255, 0.8); 
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .login-form {
      max-width: 300px;
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <video autoplay loop muted playsinline id="background-video">
    <source src="../media/bgvideoo.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
<div class="container">

  <div class="login-container">
  <?php include('message.php') ?> 
  <h2>Login
  <a href="/index.html" class="btn btn-danger float-end">BACK</a>
  </h2>
    
    <form action="./authentication.php" method="POST">  
      <div class="form-group">
        Email: <input type="text" name="email"><br />  
      </div>
      <div class="form-group">
        Pass: <input type="password" name="password"><br />   
      </div>
      <input type="submit" class="login-btn" value="Login" name="submit" />  
      <p class="p">Create Account <a href="./barber-create.php">here</a></p>
      <p><a href="./admin-login.php">ADMIN</a></p>
    </form>
  </div>
</div>
  <?php 
    
  ?>
  </script>
</body>
</html>
