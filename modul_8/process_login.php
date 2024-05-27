<?php
if (isset($_POST['name']) && isset($_POST['email']) && !empty($_POST['name']) && !empty($_POST['email'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $date = date('d-m-Y');
  $time = date('H:i:s');
  $day = date('l');

  include 'welcome.php';
} else {
  header("Location: error.php");
  exit();
}
