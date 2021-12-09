<?php
  session_start();
  unset($_SESSION['id']);
  unset($_SESSION['bus_name']);
  unset($_SESSION['email']);
  session_destroy();
  header('location: login.php');
?>