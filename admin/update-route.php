<?php 
  include_once 'partials/header.php';
  include_once 'db.php';

  // Get ID
  $id = $_GET['id'];

  // Update 
  $sql = "SELECT * FROM routes WHERE id = $id";
  $qs = mysqli_query($con, $sql);
  $info = mysqli_fetch_assoc($qs);

  if (isset($_POST['route_btn'])) {
    $route_name = $_POST['route_name'];
    $full_route = $_POST['full_route'];

    $sql2 = "UPDATE routes SET route_name ='$route_name', full_route = '$full_route' WHERE id = $id";
    $qs2 = mysqli_query($con, $sql2);
    if( $qs ) {
      header('location: routes.php');
    } else {
      echo '<div class="alert alert-warning" role="alert">Someting create error, Please try again!</div>';
    }
  }

?>


    <!-- login area start -->
    <section class="login-area pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mt-3">
            <div class="new-item">
              <a href="dashboard.php" class="btn btn-secondary">Dashboard</a> > <a href="routes.php" class="btn btn-secondary">Routes</a>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="login-title">
              <h3>Update Route</h3>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-3">
            <div class="login">
              <form action="" method="POST">
                <div class="row">
                  <div class="col-12 mb-3">
                    <input type="text" class="form-control" value="<?php echo $info['route_name']; ?>" name="route_name">
                  </div>
                  <div class="col-12 mb-3">
                    <input type="text" class="form-control" value="<?php echo $info['full_route']; ?>" name="full_route">
                  </div>

                  <div class="col-6 mb-3 mt-3 offset-3 btn btn-info">
                    <input type="submit" class="form-control" value="Update Route" name="route_btn">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- login area end -->


<?php include_once 'partials/footer.php' ?>