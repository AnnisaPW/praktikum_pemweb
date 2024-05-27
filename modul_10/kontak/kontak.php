<!DOCTYPE html>
<html>

<head>
  <title>Form Kontak</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Form Kontak</h1>
  <form method="post" action="simpan_kontak.php">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="jkel">Jenis Kelamin:</label><br>
    <input type="text" id="jkel" name="jkel"><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="alamat">Alamat:</label><br>
    <input type="text" id="alamat" name="alamat"><br><br>

    <label for="kota">Kota:</label><br>
    <input type="text" id="kota" name="kota"><br><br>

    <label for="pesan">Pesan:</label><br>
    <textarea id="pesan" name="pesan" required></textarea><br><br>

    <input type="submit" value="Submit">
  </form>

  <hr>

  <h1>Daftar Kontak</h1>
  <?php
  include "admin/koneksi.inc.php";

  // Prepare SQL statement
  $sql = "SELECT * FROM kontak ORDER BY nama";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
            <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Pesan</th>
            </tr>";

    $no = 1;
    while ($row = $result->fetch_row()) {
      echo "<tr>
                <td>{$no}</td>
                <td>{$row[1]}</td>
                <td>{$row[2]}</td>
                <td>{$row[3]}</td>
                <td>{$row[4]}</td>
                <td>{$row[5]}</td>
                <td>{$row[6]}</td>
                </tr>";
      $no++;
    }
    echo "</table>";
  } else {
    echo "Tidak ada data kontak.";
  }

  $conn->close();
  ?>
</body>

</html>