<?php 
  include_once 'partials/header.php';
  include_once 'db.php';

  if (isset($_POST['route_btn'])) {
    $route_name = $_POST['route_name'];
    $full_route = $_POST['full_route'];

    $sql = "INSERT INTO routes(route_name, full_route) VALUE('$route_name', '$full_route')";
    $qs = mysqli_query($con, $sql);
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
              <h3>Add New Route</h3>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-3">
            <div class="login">
              <form action="" method="POST">
                <div class="row">
                  <div class="col-12 mb-3">
                    <input type="text" class="form-control" placeholder="Route Name" name="route_name">
                  </div>
                  <div class="col-12 mb-3">
                    <input type="text" class="form-control" placeholder="Full Route" name="full_route">
                  </div>

                  <div class="col-6 mt-3 offset-3 btn btn-info">
                    <input type="submit" class="form-control" value="Add Place" name="route_btn">
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