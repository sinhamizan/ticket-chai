<?php 
  session_start();
  include_once 'partials/header.php';
  include_once 'db.php';

  if( !isset( $_SESSION['admin_email'] ) ) {
    header('location: index.php');
  }

  // Buses
  $bus_sql = "SELECT * FROM bus_operator";
  $bus_qs = mysqli_query($con, $bus_sql);
  $total_bus = mysqli_num_rows($bus_qs);

  // Bus Schedules
  $sche_sql = "SELECT * FROM bus_schedules";
  $sche_qs = mysqli_query($con, $sche_sql);
  $total_sche = mysqli_num_rows($sche_qs);

  // Seat Booking
  $book_sql = "SELECT * FROM seat_booking";
  $book_qs = mysqli_query($con, $book_sql);
  $total_book = mysqli_num_rows($book_qs);

  // Admin Users
  $admin_sql = "SELECT * FROM admin_users";
  $admin_qs = mysqli_query($con, $admin_sql);
  $admin_user = mysqli_num_rows($admin_qs);

  // Place
  $place_sql = "SELECT * FROM places";
  $place_qs = mysqli_query($con, $place_sql);
  $total_place = mysqli_num_rows($place_qs);

  // Route
  $route_sql = "SELECT * FROM routes";
  $route_qs = mysqli_query($con, $route_sql);
  $total_route = mysqli_num_rows($route_qs);
?>

  <!-- dboard area start -->
  <section class="dboard-area mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="dboard">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Bus Operators</h5>
                <p class="card-text">Total: <strong><?php echo $total_bus; ?></strong></p>
                <a href="bus-operators.php" class="btn btn-primary">Go</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="dboard">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Bus Schedules</h5>
                <p class="card-text">Total: <strong><?php echo $total_sche; ?></strong></p>
                <a href="view-schedule.php" class="btn btn-primary">Go</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="dboard">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Bus Seat Booking</h5>
                <p class="card-text">Total: <strong><?php echo $total_book; ?></strong></p>
                <a href="#" class="btn btn-primary">Go</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="dboard">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Places</h5>
                <p class="card-text">Total: <strong><?php echo $total_place; ?></strong></p>
                <a href="places.php" class="btn btn-primary">Go</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="dboard">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Routes</h5>
                <p class="card-text">Total: <strong><?php echo $total_route; ?></strong></p>
                <a href="routes.php" class="btn btn-primary">Go</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="dboard">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Admin Users</h5>
                <p class="card-text">Total: <strong><?php echo $admin_user; ?></strong></p>
                <a href="admin-users.php" class="btn btn-primary">Go</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- dboard area end -->

<?php include_once 'partials/footer.php' ?>