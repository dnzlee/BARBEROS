<?php 
  session_start();
  require './dbcon.php';
?>

<<?php include('./includes/header.php') ?>
    <H1 style="text-align: center; color: white;"><strong>ADMIN</strong></H1>
    <div class="container">

      <?php include('message.php') ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Customer Details
              <a href="../index.html" class="btn btn-danger float-end">Log out</a>
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone #</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $query = "SELECT * FROM customer";
                      $query_run = mysqli_query($con, $query);

                      if(mysqli_num_rows($query_run) > 0){
                        foreach($query_run as $customer){
                          ?>
                          <tr>
                            <td><?= $customer['id']; ?></td>
                            <td><?= $customer['name']; ?></td>
                            <td><?= $customer['phone']; ?></td>
                            <td><?= $customer['address']; ?></td>
                            <td>
                              <a href="admin-view.php?id=<?= $customer['id']; ?>" class="btn btn-info btn-sm">View</a>
                              <form action="code.php" method="POST" class="d-inline">
                                <button type="submit" name="delete_customer" value="<?= $customer['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                              </form>
                            </td>
                          </tr>
                          <?php
                        }
                      }
                      else{
                        echo "<h5> No Record Found </h5>";
                      }
                  ?>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Barbers
              
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone#</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $query = "SELECT * FROM barbers";
                      $query_run = mysqli_query($con, $query);

                      if(mysqli_num_rows($query_run) > 0){
                        foreach($query_run as $barbers){
                          ?>
                          <tr>
                            <td><?= $barbers['id']; ?></td>
                            <td><?= $barbers['name']; ?></td>
                            <td><?= $barbers['email']; ?></td>
                            <td><?= $barbers['phone']; ?></td>
                            <td>
                              <a href="admin-view2.php?id=<?= $barbers['id']; ?>" class="btn btn-info btn-sm">View</a>
                              <form action="code.php" method="POST" class="d-inline">
                                <button type="submit" name="delete_barbers-admin" value="<?= $barbers['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                              </form>
                            </td>
                          </tr>
                          <?php
                        }
                      }
                      else{
                        echo "<h5> No Record Found </h5>";
                      }
                  ?>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
    