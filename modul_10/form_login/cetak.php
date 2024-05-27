<?php
session_start();

// Periksa apakah pengguna sudah login, jika tidak, arahkan ke halaman login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('location: index.php');
  exit;
}

// Jika pengguna sudah login, tampilkan konten cetak.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Annisa Putri Wahyuni - Cetak</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: auto;
      padding: 20px;
    }

    h1,
    p {
      text-align: center;
      color: #333;
    }

    .content {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }

    .logout {
      text-align: center;
      margin-top: 20px;
    }

    .logout a {
      text-decoration: none;
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
    }

    .logout a:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Selamat Datang di Website Pribadi</h1>
    <div class="content">
      <h2>Halo, <?php echo $_SESSION['username']; ?>!</h2>
      <p>Terima kasih telah mengunjungi website personal saya.</p>
      <p>Di sini, Anda dapat menemukan berbagai informasi menarik tentang saya dan aktivitas saya.</p>
      <p>Selamat menjelajahi!</p>
    </div>
    <div class="logout">
      <a href="logout.php">Logout</a>
    </div>
  </div>
</body>

</html>