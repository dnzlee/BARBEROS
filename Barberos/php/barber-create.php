<?php
session_start();
?>
<?php include('./includes/header.php') ?>
<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden; /* Prevent scrolling on smaller screens */
    }

    #background-video {
      position: fixed;
      top: 0;
      left: 0;
      min-width: 100%;
      min-height: 100%;
      z-index: -1;
    }

    .form-container {
      background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background for the form container */
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
    <div class="container mt-5">
    <video autoplay loop muted playsinline id="background-video">
    <source src="../bgvideo.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
        <?php  include('./message.php') ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Create Your Barber Account
                            <a href="../index.html" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <label>Email Address</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Mobile Number</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_barber" class="btn btn-primary">Submit</button>
                            </div>
                            <p>Already have an account? Click <a href="../login.html">here.</a></p>
                        </form>
                    </div>
                </div>
            </div></div>
    </div>
    <?php include('./includes/footer.php') ?>