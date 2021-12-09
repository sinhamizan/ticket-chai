<?php 
  include_once 'partials/header.php';
  include_once 'db.php';

  if(isset($_POST['register_btn'])) {
    $bus_name = $_POST['bus_name'];
    $register_num = $_POST['register_num'];
    $bus_detail = $_POST['bus_detail'];
    $bus_owner = $_POST['bus_owner'];
    $email = $_POST['email'];
    $passw = $_POST['passw'];
    $ac_nonac = $_POST['ac_nonac'];

    if( $bus_name !='' && $register_num != '' && $bus_detail != '' && $bus_owner != '' && $email != '' && $passw != '' && $ac_nonac != '' ) {
      $sql = "INSERT INTO bus_operator(bus_name, bus_registration_num, bus_details, owner_company_name, email, passw, ac_nonac) VALUE('$bus_name', '$register_num', '$bus_detail', '$bus_owner', '$email', '$passw', '$ac_nonac')";
      $qs = mysqli_query( $con, $sql );

      if($qs) {
        header('location: login.php');
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
        <div class="col-lg-12">
          <div class="login-title">
            <h3>Register here</h3>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="login">
            <form action="" method="POST">
              <div class="row">
                <div class="col-6 mb-3">
                  <input type="text" class="form-control" placeholder="Bus Name" name="bus_name">
                </div>

                <div class="col-6 mb-3">
                  <input type="text" class="form-control" placeholder="Bus Register Number" name="register_num">
                </div>

                <div class="col-12 mb-3">
                  <textarea name="bus_detail" class="form-control" rows="3" placeholder="Bus Information"></textarea>
                </div>

                <div class="col-6 mb-3">
                  <input type="text" class="form-control" placeholder="Bus Owner / Company Name" name="bus_owner">
                </div>

                <div class="col-6 mb-3">
                  <input type="email" class="form-control" placeholder="Email" name="email">
                </div>

                <div class="col-6 mb-3">
                  <input type="password" class="form-control" placeholder="Password" name="passw">
                </div>

                <div class="col-6 mb-3">
                  <select name="ac_nonac" class="form-control">
                    <option value="0">AC</option>
                    <option value="1">Non AC</option>
                  </select>
                </div>

                <div class="col-6 mb-3 mt-3 offset-3 btn btn-info">
                  <input type="submit" class="form-control" value="Register" name="register_btn">
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