<!DOCTYPE html>
<html>

<head>
  <title>Hitung Luas Persegi Panjang</title>
</head>

<body>
  <h1>Hitung Luas Persegi Panjang</h1>
  <form method="post">
    <label for="panjang">Panjang:</label>
    <input type="number" name="panjang" id="panjang">
    <br>
    <label for="lebar">Lebar:</label>
    <input type="number" name="lebar" id="lebar">
    <br>
    <input type="submit" value="Hitung">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];
    $luas = $panjang * $lebar;
    echo "<br>Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah: $luas";
  }
  ?>
</body>

</html>