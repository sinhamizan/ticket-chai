<?php
  if(isset($_SESSION)) {
    session_start(); 
  }
  include_once 'partials/header.php';
  include_once 'db.php';

  if (isset($_POST['admin_login'])) {
    $email = $_POST['email'];
    $pass = $_POST['passw'];

    $sql = "SELECT * FROM admin_users WHERE email = '$email' AND password = '$pass'";
    $qs = mysqli_query($con, $sql);
    if( mysqli_num_rows($qs) > 0 ) {
      $_SESSION['admin_email'] = $email;
      header('location: dashboard.php');
    } else {
      echo '<div class="alert alert-warning" role="alert">Email or Password not matched!</div>';
    }
  }


?>

  <!-- login area start -->
  <section class="login-area mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="login-title">
            <h3>Administration Login</h3>
          </div>
        </div>
        <div class="col-lg-6 offset-3">
          <div class="login">
            <form action="" method="POST">
              <div class="row">
                <div class="col-12 mb-3">
                  <input type="email" class="form-control" placeholder="Email" name="email">
                </div>

                <div class="col-12 mb-3">
                  <input type="password" class="form-control" placeholder="Password" name="passw">
                </div>

                <div class="col-6 mb-3 mt-3 offset-3 btn btn-info">
                  <input type="submit" class="form-control" value="Login" name="admin_login">
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