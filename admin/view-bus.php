<?php 
  include_once 'partials/header.php';
  include_once 'db.php';

  // Get ID
  $id = $_GET['id'];

  // Bus View
  $sql = "SELECT * FROM bus_operator WHERE id=$id";
  $qs = mysqli_query($con, $sql);
  $bus_info = mysqli_fetch_assoc($qs);
?>


  <!-- bus operators area start -->
  <section class="bus-op-area mt-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mb-5">
          <div class="new-item">
            <a href="dashboard.php" class="btn btn-secondary">Dashboard</a> >
            <a href="bus-operators.php" class="btn btn-secondary">Bus Operators</a>
          </div>
        </div>
        <div class="col-lg-6">
          <h3>Bus Details</h3>
        </div>
        <div class="col-lg-12 mt-3">
          <table class="table table-striped">
            <tbody>
              <tr>
                <th>Bus Name: </th>
                <td><?php echo $bus_info['bus_name']; ?></td>
              </tr>
              <tr>
                <th>Bus Owner / Company Name: </th>
                <td><?php echo $bus_info['owner_company_name']; ?></td>
              </tr>
              <tr>
                <th>Bus Registration No.: </th>
                <td><?php echo $bus_info['bus_registration_num']; ?></td>
              </tr>
              <tr>
                <th>Bus Detail: </th>
                <td><?php echo $bus_info['bus_details']; ?></td>
              </tr>
              <tr>
                <th>Owner / Company Email</th>
                <td><?php echo $bus_info['email']; ?></td>
              </tr>
              <tr>
                <th>AC / Non AC</th>
                <?php if($bus_info['ac_nonac'] == 1): ?>
                  <td>Non AC</td>
                <?php else: ?>
                  <td>AC</td>
                <?php endif; ?>
              </tr>
              <tr>
                <th>Account Status: </th>
                <?php if($bus_info['is_active'] == 1): ?>
                  <td>Active</td>
                <?php else: ?>
                  <td>Deactive</td>
                <?php endif; ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- bus operators area end -->

<?php include_once 'partials/footer.php' ?>