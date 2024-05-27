<?php
include "admin/koneksi.inc.php";

// Memindahkan nilai data form ke variabel sederhana
$vnama = $conn->real_escape_string($_POST['nama']);
$vjkel = $conn->real_escape_string($_POST['jkel']);
$vemail = $conn->real_escape_string($_POST['email']);
$valamat = $conn->real_escape_string($_POST['alamat']);
$vkota = $conn->real_escape_string($_POST['kota']);
$vpesan = $conn->real_escape_string($_POST['pesan']);

// Prepare SQL statement
$sql = "INSERT INTO kontak (nama, jkel, email, alamat, kota, pesan) 
        VALUES ('$vnama', '$vjkel', '$vemail', '$valamat', '$vkota', '$vpesan')";

// Execute the query
if ($conn->query($sql) === TRUE) {
  echo "Data berhasil disimpan";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();

// Redirect to form page
header("Location: kontak.php");
exit;
