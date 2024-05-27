<!DOCTYPE html>
<html>

<head>
  <title>Welcome Page</title>
</head>

<body>
  <h2>Welcome</h2>
  <p>Nama: <?php echo htmlspecialchars($name); ?></p>
  <p>Email: <?php echo htmlspecialchars($email); ?></p>
  <p>Jam: <?php echo $time; ?></p>
  <p>Hari: <?php echo $day; ?></p>
  <p>Tanggal: <?php echo $date; ?></p>
</body>

</html>