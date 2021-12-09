<?php 
  include_once 'db.php';

  // Get ID
  $id = $_GET['id'];

  // Delete 
  $sql = "DELETE FROM routes WHERE id = $id";
  $qs = mysqli_query($con, $sql);

  if($qs) {
    header('location: routes.php');
  } else {
    echo '<div class="alert alert-warning" role="alert">Someting create error, Please try again!</div>';
  }