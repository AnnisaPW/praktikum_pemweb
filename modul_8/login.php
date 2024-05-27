<!DOCTYPE html>
<html>

<head>
  <title>Login Form</title>
</head>

<body>
  <h2>Login Form</h2>
  <form action="process_login.php" method="POST">
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <input type="submit" value="Login">
  </form>
</body>

</html>