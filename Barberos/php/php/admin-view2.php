<?php

require './dbcon.php';
?>
<?php include('includes/header.php') ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Admin
                            <a href="./dashboard-admin.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php   
                            if(isset($_GET['id']))
                            {
                                $barbers_id = mysqli_real_escape_string($con, $_GET['id']);
                                $query = "SELECT * FROM barbers WHERE id='$barbers_id' ";
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    $barbers =mysqli_fetch_array($query_run);
                                    ?>
                                <div class="mb-3">
                                    <label>Name</label>
                                    <p class="form-control">
                                        <?= $barbers['name']; ?>
                                    </p>
                                </div>
                                
                                <div class="mb-3">
                                    <label>Email</label>
                                    <p class="form-control">
                                        <?= $barbers['email']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Mobile Number</label>
                                    <p class="form-control">
                                        <?= $barbers['phone']; ?>
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
            </div></div>
    </div>
    <?php include('includes/footer.php') ?>