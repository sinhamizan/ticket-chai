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
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">

    <title>Home</title>
  </head>
  <body>
    <!-- Header start -->
    <header>
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="logo">
              <?php if ( isset( $_SESSION['admin_email'] ) ): ?>
                <a href="dashboard.php">Ticket Chai</a>
              <?php else: ?>
                <a href="index.php">Ticket Chai</a>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="menu">
              <ul>
                <?php if ( isset( $_SESSION['admin_email'] ) ): ?>
                  <li><a href="logout.php">logout</a></li>
                <?php else: ?>
                  <li><a href="index.php">login</a></li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header end -->