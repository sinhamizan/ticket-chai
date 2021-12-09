<?php 
  include_once 'partials/header.php';
  include_once 'db.php';

  // Get ID
  $id = $_GET['id'];

  // Bus View
  $sql = "SELECT * FROM bus_schedules WHERE id=$id";
  $qs = mysqli_query($con, $sql);
  $bus_info = mysqli_fetch_assoc($qs);

  $bus_name = $bus_info['bus_name'];
  $route_name = $bus_info['route_name'];
  $start_time = $bus_info['start_time'];
  $reach_time = $bus_info['reach_time'];
  $start_place = $bus_info['start_place'];
  $end_place = $bus_info['end_place'];
  $total_seats = $bus_info['total_seats'];
  $cost_per_seats = $bus_info['cost_per_seats'];

  // Booking ID
  $booking_id = bin2hex( random_bytes( 8 ) );

  // Booking Seat
  if(isset($_POST['booking_btn'])) {
    $user_name = $_POST['full_name'];
    $phone_num = $_POST['phone_num'];
    $user_email = $_POST['user_email'];
    $gender = $_POST['gender'];
    $seats = $_POST['seats'];
    $boarding_at = $_POST['boarding_at'];
    $payment_code = $_POST['payment_code'];

    if( $user_name != '' && $phone_num != '' && $user_email != '' && $gender != '' && $boarding_at != '' && $payment_code != '') {
      $book_sql = "INSERT INTO seat_booking(booking_id,	bus_name,	route_name,	start_time,	end_time,	boarding_at,	name,	phone,	email,	gender,	seat,	payment_code) VALUES('$booking_id', '$bus_name', '$route_name', '$start_time', '$reach_time', '$boarding_at', '$user_name', '$phone_num', '$user_email', '$gender', '$seats', '$payment_code')";
      $book_qs = mysqli_query($con, $book_sql);
      if($book_qs) {
        header('location: thanks.php');
      }
    } else {
      echo '<div class="alert alert-warning" role="alert">All Fields are required!</div>';
    }
  }

  // Get Place
  $place_sql = "SELECT * FROM places";
  $place_qs = mysqli_query($con, $place_sql);

?>

  <!-- bus operators area start -->
  <section class="bus-op-area mt-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h3>Schedule Details</h3>
        </div>
        <div class="col-lg-12 mt-3">
          <table class="table table-striped">
            <tbody>
              <tr>
                <th>Bus Name: </th>
                <td><?php echo $bus_name; ?></td>
              </tr>
              <tr>
                <th>Route Name: </th>
                <td><?php echo $route_name; ?></td>
              </tr>
              <tr>
                <th>Start Time: </th>
                <td><?php echo $start_time; ?></td>
              </tr>
              <tr>
                <th>Arrived Time: </th>
                <td><?php echo $reach_time; ?></td>
              </tr>
              <tr>
                <th>Start Place: </th>
                <td><?php echo $start_place; ?></td>
              </tr>
              <tr>
              <th>End Place: </th>
                <td><?php echo $end_place; ?></td>
              </tr>
              <tr>
                <th>Total Seats: </th>
                <td><?php echo $total_seats; ?></td>
              </tr>
              <!-- <tr>
                <th>Available Seats: </th>
                <td><?php echo $total_seats; ?></td>
              </tr> -->
              <tr>
                <th>Ticket Price: </th>
                <td><?php echo $cost_per_seats; ?>TK.</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-12 mt-2">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Book Now</button>
        </div>
      </div>
    </div>
  </section>
  <!-- bus operators area end -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Give Your Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <section class="login-area">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="login">
                    <form action="" method="POST">
                      <div class="row">
                        <div class="col-12 mb-3">
                          <input type="text" class="form-control" placeholder="Full Name" name="full_name">
                        </div>

                        <div class="col-6 mb-3">
                          <input type="number" class="form-control" placeholder="Your Mobile Number" name="phone_num">
                        </div>

                        <div class="col-6 mb-3">
                          <input type="email" class="form-control" placeholder="Your Email" name="user_email">
                        </div>

                        <div class="col-6 mb-3">
                          <select name="gender" class="form-control">
                            <option value="">-- Select Gender --</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                          </select>
                        </div>

                        <div class="col-6 mb-3">
                          <select name="seats" class="form-control">
                            <option value="">-- Select Seats --</option>
                            <option value="A1">A1</option>
                            <option value="A2">A2</option>
                            <option value="A3">A3</option>
                            <option value="A4">A4</option>
                            <option value="B1">B1</option>
                            <option value="B2">B2</option>
                            <option value="B3">B3</option>
                            <option value="B4">B4</option>
                            <option value="C1">C1</option>
                            <option value="C2">C2</option>
                            <option value="C3">C3</option>
                            <option value="C4">C4</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="E1">E1</option>
                            <option value="E2">E2</option>
                            <option value="E3">E3</option>
                            <option value="E4">E4</option>
                            <option value="F1">F1</option>
                            <option value="F2">F2</option>
                            <option value="F3">F3</option>
                            <option value="F4">F4</option>
                            <option value="G1">G1</option>
                            <option value="G2">G2</option>
                            <option value="G3">G3</option>
                            <option value="G4">G4</option>
                            <option value="H1">H1</option>
                            <option value="H2">H2</option>
                            <option value="H3">H3</option>
                            <option value="H4">H4</option>
                            <option value="I1">I1</option>
                            <option value="I2">I2</option>
                            <option value="I3">I3</option>
                            <option value="I4">I4</option>
                            <option value="J1">J1</option>
                            <option value="J2">J2</option>
                            <option value="J3">J3</option>
                            <option value="J4">J4</option>
                            <option value="J5">J5</option>
                          </select>
                        </div>

                        <div class="col-6 mb-3">
                          <select name="boarding_at" class="form-control">
                            <option value="">-- Boarding at --</option>
                            <?php while( $p_row = mysqli_fetch_assoc($place_qs) ): ?>
                              <option value="<?php echo $p_row['place_name']; ?>"><?php echo $p_row['place_name']; ?></option>
                            <?php endwhile; ?>
                          </select>
                        </div>

                        <div class="col-6 mb-3">
                          <input type="number" name="payment_code" placeholder="Payment Code" class="form-control">
                        </div>

                        <div class="col-4 mb-3 mt-4 offset-4 btn btn-info">
                          <input type="submit" class="form-control" value="Book Now" name="booking_btn">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

<?php include_once 'partials/footer.php' ?>