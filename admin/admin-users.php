<?php 
  include_once 'partials/header.php';
  include_once 'db.php';

  $sql = "SELECT * FROM admin_users";
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
          <h3>All Admin Users</h3>
        </div>
        <div class="col-lg-12 mt-5">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">S. No.</th>
                <th scope="col">Admin Name</th>
                <th scope="col">Admin Email</th>
              </tr>
            </thead>
            <tbody>
            <?php
              $i = 1;
              while($row = mysqli_fetch_assoc($qs)): 
            ?>
              <tr>
                <th scope="row"><?php echo $i++; ?></th>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
              </tr>
            <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- bus operators area end -->

<?php include_once 'partials/footer.php' ?>