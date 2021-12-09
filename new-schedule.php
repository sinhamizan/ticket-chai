<?php 
  if(isset($_SESSION)) {
    session_start(); 
  }
  include_once 'partials/header.php';
  include_once 'db.php';

  echo $_SESSION['bus_name'];

  // Get Route
  $route_sql = "SELECT * FROM routes";
  $route_qs = mysqli_query( $con, $route_sql );

  // Get Start Place
  $place_sql = "SELECT * FROM places";
  $place_qs = mysqli_query( $con, $place_sql );

  // Get End Place
  $place_sql2 = "SELECT * FROM places";
  $place_qs2 = mysqli_query( $con, $place_sql2 );

  // Create Schedule
  if(isset($_POST['create_schedule'])) {
    $bus_name = $_SESSION['bus_name'];
    $route_name = $_POST['route_name'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $start_place = $_POST['start_place'];
    $end_place = $_POST['end_place'];
    $available_seats = $_POST['available_seats'];
    $ticket_price = $_POST['ticket_price'];

    if( $route_name !='' && $start_time != '' && $end_time != '' && $start_place != '' && $end_place != '' && $available_seats != '' && $ticket_price != '' ) {
      $sql = "INSERT INTO bus_schedules(bus_name,	route_name,	start_time,	reach_time,	start_place,	end_place,	total_seats, cost_per_seats) VALUE('$bus_name', '$route_name', '$start_time', '$end_time', '$start_place', '$end_place', '$available_seats', '$ticket_price')";
      $qs = mysqli_query( $con, $sql );

      if($qs) {
        header('location: dashboard.php');
      } else {
        echo '<div class="alert alert-warning" role="alert">All error are required!</div>';
      }
    } else {
      echo '<div class="alert alert-warning" role="alert">All Fields are required!</div>';
    }
  }
?>


  <!-- login area start -->
  <section class="login-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mb-3">
          <div class="login-title">
            <h3>Create New Schedule</h3>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="login">
            <form action="" method="POST">
              <div class="row">
                <div class="col-6 mb-3">
                  <select name="route_name" class="form-control">
                    <option value="">-- Select Route --</option>
                    <?php while($row = mysqli_fetch_assoc($route_qs)): ?>
                      <option value="<?php echo $row['route_name']; ?>"><?php echo $row['route_name']; ?></option>
                    <?php endwhile; ?>
                  </select>
                </div>

                <div class="col-3 mb-3">
                  <select name="start_time" class="form-control">
                    <option value="">-- Select Start Time --</option>
                    <option value="1 am">1 am</option>
                    <option value="2 am">2 am</option>
                    <option value="3 am">3 am</option>
                    <option value="4 am">4 am</option>
                    <option value="5 am">5 am</option>
                    <option value="6 am">6 am</option>
                    <option value="7 am">7 am</option>
                    <option value="8 am">8 am</option>
                    <option value="9 am">9 am</option>
                    <option value="10 am">10 am</option>
                    <option value="11 am">11 am</option>
                    <option value="12 am">12 am</option>
                    <option value="1 pm">1 pm</option>
                    <option value="2 pm">2 pm</option>
                    <option value="3 pm">3 pm</option>
                    <option value="4 pm">4 pm</option>
                    <option value="5 pm">5 pm</option>
                    <option value="6 pm">6 pm</option>
                    <option value="7 pm">7 pm</option>
                    <option value="8 pm">8 pm</option>
                    <option value="9 pm">9 pm</option>
                    <option value="10 pm">10 pm</option>
                    <option value="11 pm">11 pm</option>
                    <option value="12 pm">12 pm</option>
                  </select>
                </div>

               
                <div class="col-3 mb-3">
                  <select name="end_time" class="form-control">
                    <option value="">-- Select Arrived Time --</option>
                    <option value="1 am">1 am</option>
                    <option value="2 am">2 am</option>
                    <option value="3 am">3 am</option>
                    <option value="4 am">4 am</option>
                    <option value="5 am">5 am</option>
                    <option value="6 am">6 am</option>
                    <option value="7 am">7 am</option>
                    <option value="8 am">8 am</option>
                    <option value="9 am">9 am</option>
                    <option value="10 am">10 am</option>
                    <option value="11 am">11 am</option>
                    <option value="12 am">12 am</option>
                    <option value="1 pm">1 pm</option>
                    <option value="2 pm">2 pm</option>
                    <option value="3 pm">3 pm</option>
                    <option value="4 pm">4 pm</option>
                    <option value="5 pm">5 pm</option>
                    <option value="6 pm">6 pm</option>
                    <option value="7 pm">7 pm</option>
                    <option value="8 pm">8 pm</option>
                    <option value="9 pm">9 pm</option>
                    <option value="10 pm">10 pm</option>
                    <option value="11 pm">11 pm</option>
                    <option value="12 pm">12 pm</option>
                  </select>
                </div>

                <div class="col-6 mb-3">
                  <select name="start_place" class="form-control">
                    <option value="">-- Select Start Place --</option>
                    <?php while($row = mysqli_fetch_assoc($place_qs)): ?>
                      <option value="<?php echo $row['place_name']; ?>"><?php echo $row['place_name']; ?></option>
                    <?php endwhile; ?>
                  </select>
                </div>

                <div class="col-6 mb-3">
                  <select name="end_place" class="form-control">
                    <option value="">-- Select End Place --</option>
                    <?php while($row2 = mysqli_fetch_assoc($place_qs2)): ?>
                      <option value="<?php echo $row2['place_name']; ?>"><?php echo $row2['place_name']; ?></option>
                    <?php endwhile; ?>
                  </select>
                </div>

                <div class="col-6 mb-3">
                  <input type="number" class="form-control" placeholder="Available Seats" name="available_seats">
                </div>

                <div class="col-6 mb-3">
                  <input type="number" class="form-control" placeholder="Ticket Price" name="ticket_price">
                </div>

                <div class="col-4 mb-3 mt-3 offset-4 btn btn-info">
                  <input type="submit" class="form-control" value="Create Schedule" name="create_schedule">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- login area end -->


<?php include_once 'partials/footer.php'; ?>