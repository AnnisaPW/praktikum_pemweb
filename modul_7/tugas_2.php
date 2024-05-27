<!DOCTYPE html>
<html>

<head>
  <title>Biodata</title>
</head>

<body>
  <h1>Biodata</h1>

  <?php
  // Define variables to store biodata information
  $nama = "Budi";
  $tempatLahir = "Tasikmalaya";
  $tanggalLahir = "1990-01-01";
  $jenisKelamin = "Laki-laki";
  $alamat = "Jl. Merdeka No. 12";
  $noTelepon = "08123456789";
  $pekerjaan = "Software Engineer";
  $hobi = array("Membaca", "Menulis", "Olahraga");

  // Display biodata information
  echo "<p>Nama: $nama</p>";
  echo "<p>Tempat Lahir: $tempatLahir</p>";
  echo "<p>Tanggal Lahir: " . date("d F Y", strtotime($tanggalLahir)) . "</p>"; // Format tanggal lahir using date()
  echo "<p>Jenis Kelamin: $jenisKelamin</p>";
  echo "<p>Alamat: $alamat</p>";
  echo "<p>No. Telepon: $noTelepon</p>";
  echo "<p>Pekerjaan: $pekerjaan</p>";
  echo "<p>Hobi: ";
  foreach ($hobi as $value) {
    echo "$value, ";
  }
  echo "</p>";
  ?>
</body>

</html>