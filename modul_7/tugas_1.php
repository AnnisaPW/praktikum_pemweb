<!DOCTYPE html>
<html>

<head>
  <title>Tanggalan</title>
</head>

<body>
  <h1>Tanggal dan Waktu</h1>
  <p>Berikut adalah beberapa format tanggal dan waktu:</p>

  <?php
  // Format 1: m-d-Y, h:i:s a
  echo date("m-d-Y, h:i:s a") . "<br>";

  // Format 2: F j, Y g:i a
  echo date("F j, Y g:i a") . "<br>";

  // Format 3: l, F j, Y
  echo date("l, F j, Y") . "<br>";

  // Format 4: D, M d Y H:i:s
  echo date("D, M d Y H:i:s") . "<br>";
  ?>
</body>

</html>