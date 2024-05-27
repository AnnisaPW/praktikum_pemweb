<?php
include "admin/koneksi.inc.php";

// Prepare SQL statement
$sql = "SELECT * FROM kontak ORDER BY nama";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
  echo "<!DOCTYPE html>
    <html>
    <head>
        <title>Cetak Daftar Kontak</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                font-size: 12px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <h1>Daftar Kontak</h1>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Pesan</th>
            </tr>";

  $no = 1;
  while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$no}</td>
            <td>{$row['nama']}</td>
            <td>{$row['email']}</td>
            <td>{$row['alamat']}</td>
            <td>{$row['kota']}</td>
            <td>{$row['pesan']}</td>
            </tr>";
    $no++;
  }

  echo "</table>
        <br>
        <button onClick='window.print()'>Cetak Halaman</button>
    </body>
    </html>";
} else {
  echo "Tidak ada data untuk ditampilkan.";
}

// Close connection
$conn->close();
