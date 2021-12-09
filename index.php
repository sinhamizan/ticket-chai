<?php 
  include_once 'partials/header.php';
  include_once 'db.php';

  // Avialable Schedule
  $schedule_sql = "SELECT * FROM bus_schedules WHERE is_accept = 1";
  $schedule_qs = mysqli_query($con, $schedule_sql);

  // Avialable Bus
  $bus_sql = "SELECT * FROM bus_operator WHERE is_active = 1";
  $bus_qs = mysqli_query($con, $bus_sql);

  // Avialable Route
  $route_sql = "SELECT * FROM routes";
  $route_qs = mysqli_query($con, $route_sql);
?>


    <!-- Hero area start -->
    <section class="hero-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="hero">
              <h1>Buy Bus tickets and give a comfortable tour.</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero area end -->

    <!-- booking area start -->
    <section class="booking-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="booking-title">
              <h2>Available Bus Schedules</h2>
            </div>
          </div>
          <?php
            if( mysqli_num_rows($schedule_qs) > 0 ):
            while( $sh_row = mysqli_fetch_assoc($schedule_qs) ):
          ?>
          <div class="col-lg-6">
            <div class="booking">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $sh_row['bus_name']; ?></h5>
                  <div class="card-text mb-1"><strong>Route:</strong> <?php echo $sh_row['route_name']; ?></div>
                  <div class="card-text mb-1"><strong>Start Time:</strong> <?php echo $sh_row['start_time']; ?></div>
                  <div class="card-text mb-4"><strong>Ticket Price:</strong> <?php echo $sh_row['cost_per_seats']; ?>TK.</div>
                  <a href="view-schedule.php?id=<?php echo $sh_row['id']; ?>" class="btn btn-primary">View</a>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </section>
    <!-- booking area end -->

    <!-- bus area start -->
    <section class="bus-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="bus-title">
              <h2>available bus</h2>
            </div>
          </div>
          <?php
            if( mysqli_num_rows($bus_qs) > 0 ):
            while( $bus_row = mysqli_fetch_assoc($bus_qs) ):
          ?>
          <div class="col-lg-3">
            <div class="bus">
              <a href=""><?php echo $bus_row['bus_name']; ?></a>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </section>
    <!-- bus area end -->

    <!-- route area start -->
    <section class="route-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="route-title">
              <h2>Available Route</h2>
            </div>
          </div>
          <?php
            if( mysqli_num_rows($route_qs) > 0 ):
            while( $bus_row = mysqli_fetch_assoc($route_qs) ):
          ?>
          <div class="col-lg-3">
            <div class="bus">
              <a href=""><img src="assets/imgs/route.png" alt=""> <?php echo $bus_row['route_name']; ?></a>
            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </section>
    <!-- route area end -->

<?php include_once 'partials/footer.php'; ?>