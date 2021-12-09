<?php 
  include_once 'partials/header.php';
  include_once 'db.php';

  // Get ID
  $id = $_GET['id'];

  // Update 
  $sql = "SELECT * FROM places WHERE id = $id";
  $qs = mysqli_query($con, $sql);
  $info = mysqli_fetch_assoc($qs);

  if (isset($_POST['place_btn'])) {
    $place_name = $_POST['place_name'];

    $sql2 = "UPDATE places SET place_name ='$place_name' WHERE id = $id";
    $qs2 = mysqli_query($con, $sql2);
    if( $qs ) {
      header('location: places.php');
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
              <a href="dashboard.php" class="btn btn-secondary">Dashboard</a> > <a href="places.php" class="btn btn-secondary">Places</a>
            </div>
          </div>
          <div class="col-lg-12 pb-3">
            <div class="login-title">
              <h3>Update Location / Place</h3>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-3">
            <div class="login">
              <form action="" method="POST">
                <div class="row">
                  <div class="col-12 mb-3">
                    <input type="text" class="form-control" value="<?php echo $info['place_name']; ?>" name="place_name">
                  </div>

                  <div class="col-6 mb-5 mt-3 offset-3 btn btn-info">
                    <input type="submit" class="form-control" value="Update Place" name="place_btn">
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