<?php
session_start();
?>
<?php include('./includes/header.php') ?>

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
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
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