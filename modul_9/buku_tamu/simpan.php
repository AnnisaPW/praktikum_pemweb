<?php
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

// Menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isi'];

// Menyimpan data ke dalam tabel buku_tamu
$sql = "INSERT INTO buku_tamu (nama, email, isi) VALUES ('$nama', '$email', '$isi')";

if ($conn->query($sql) === TRUE) {
  echo "Data berhasil disimpan. <a href='index.php'>Kembali ke Form Buku Tamu</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
