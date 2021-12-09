<?php 
  include_once 'partials/header.php';
  include_once 'db.php';

  $sql = "SELECT * FROM routes";
  $qs = mysqli_query($con, $sql);

?>


  <!-- bus operators area start -->
  <section class="bus-op-area mt-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="new-item">
            <a href="dashboard.php" class="btn btn-secondary">Go Dashboard</a>
          </div>
        </div>
        <div class="col-lg-6">
          <h3>All Routes</h3>
        </div>
        <div class="col-lg-6">
          <div class="new-item float-end">
            <a href="new-route.php" class="btn btn-success">Add New</a>
          </div>
        </div>
        <div class="col-lg-12 mt-5">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">S. No.</th>
                <th scope="col">Route Name</th>
                <th scope="col">Full Route</th>
                <th scope="col" class="text-right">Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php if( mysqli_num_rows( $qs ) ): 
              $i = 1;
              while($row = mysqli_fetch_assoc($qs)):
            ?>
              <tr>
                <th scope="row"><?php echo $i++; ?></th>
                <td><?php echo $row['route_name']; ?></td>
                <td><?php echo $row['full_route']; ?></td>
                <td class="text-right">
                  <a href="update-route.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                  <a href="delete-route.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            <?php endwhile; endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- bus operators area end -->


<?php include_once 'partials/footer.php' ?>