<HTML>

<HEAD>
  <title>Koneksi Database MySQL</title>
</HEAD>

<BODY>
  <h1>Koneksi database dengan mysqli</h1>
  <?php

  $conn = mysqli_connect("localhost", "root", "chaca020603", "football_league");

  // Check connection
  if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM liga";
  $hasil = mysqli_query($conn, $sql);

  if (mysqli_num_rows($hasil) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_row($hasil)) {
      echo "liga " . $row[1] . " "; // Assuming nama_liga is the second column
      echo "mempunyai " . $row[2] . " "; // Assuming jumlah_wakil is the third column
      echo "wakil di liga champion <br>";
    }
  } else {
    echo "Tidak ada data liga ditemukan";
  }

  mysqli_close($conn);

  ?>
</BODY>

</HTML>