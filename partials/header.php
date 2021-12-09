<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Home</title>
  </head>
  <body>
    <!-- Header start -->
    <header>
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="logo">
              <a href="index.php">Ticket Chai</a>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="menu">
              <ul>
                <?php if( isset($_SESSION['email']) ): ?>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="">Dashboard</a></li>
                  <li><a href="">Profile</a></li>
                  <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                  <li><a href="">Home</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Contact us</a></li>
                  <li><a href="login.php">Login</a></li>
                  <li><a href="register.php">Register</a></li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header end -->