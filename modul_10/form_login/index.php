<?php
session_start();
include "admin/koneksi.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT id, password FROM users WHERE username = ?";
  if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($id, $hashed_password);
    if ($stmt->fetch() && password_verify($password, $hashed_password)) {
      // Password is correct, so start a new session
      $_SESSION['loggedin'] = true;
      $_SESSION['id'] = $id;
      $_SESSION['username'] = $username;

      // Redirect user to welcome page
      header("location: cetak.php");
      exit;
    } else {
      // Display an error message if password is not valid
      $error = "The password you entered was not valid.";
    }
    $stmt->close();
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h2>Login</h2>
  <form action="" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Login">
  </form>

  <?php if (isset($error)) {
    echo "<p>$error</p>";
  } ?>
</body>

</html>