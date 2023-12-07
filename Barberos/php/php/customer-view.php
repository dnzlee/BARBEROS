<?php

require 'dbcon.php';
?>
<?php include('includes/header.php') ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Appointment Overview
                            <a href="./dashboard.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <?php   
                            if(isset($_GET['id']))
                            {
                                $customer_id = mysqli_real_escape_string($con, $_GET['id']);
                                $query = "SELECT * FROM customer WHERE id='$customer_id' ";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    $customer =mysqli_fetch_array($query_run);
                                    ?>
                                <div class="mb-3">
                                    <label>Name</label>
                                    <p class="form-control">
                                        <?= $customer['name']; ?>
                                    </p>
                                </div>
                                
                                <div class="mb-3">
                                    <label>Contact Number</label>
                                    <p class="form-control">
                                        <?= $customer['phone']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Address</label>
                                    <p class="form-control">
                                        <?= $customer['address']; ?>
                                    </p>
                                </div>
                                <?php
                            }
                            else{
                                echo "<h4>No Such ID Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div></div>
    </div>
    <?php include('includes/footer.php') ?>