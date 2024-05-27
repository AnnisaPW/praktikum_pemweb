<!DOCTYPE html>
<html>

<head>
  <title>Buku Tamu</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Form Buku Tamu</h1>
  <form method="post" action="simpan.php">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="isi">Isi:</label><br>
    <textarea id="isi" name="isi" required></textarea><br><br>

    <input type="submit" value="Submit">
  </form>
  <br>
  <h2>Daftar Buku Tamu</h2>
  <?php
  // Tampilkan data buku tamu
  $servername = "localhost";
  $username = "root";
  $password = "chaca020603";
  $dbname = "book_list";

  // Membuat koneksi
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Memeriksa koneksi
  if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
  }

  // Menjalankan query untuk mengambil data buku tamu
  $sql = "SELECT id_bt, nama, email, isi FROM buku_tamu";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Menampilkan data buku tamu
    while ($row = $result->fetch_assoc()) {
      echo "<p><strong>Nama:</strong> " . $row["nama"] . "<br><strong>Email:</strong> " . $row["email"] . "<br><strong>Isi:</strong> " . $row["isi"] . "</p><hr>";
    }
  } else {
    echo "Tidak ada data buku tamu.";
  }

  $conn->close();
  ?>
</body>

</html>