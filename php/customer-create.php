<?php
session_start();
?>
<?php include('./includes/header.php') ?>
    <div class="container mt-5">

        <?php  include('./message.php') ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Create Appointment
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
                                <label>Contact Number</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_customer" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div></div>
    </div>
    <?php include('./includes/footer.php') ?>