<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sistem Penjualan</title>
        <link rel="stylesheet" href="style.css">
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <br>
    <body>
        <div id="container">
        <br>
            <header>
                <h1>Aplikasi Sistem Penjualan Sederhana</h1>
            </header>
            <ul>
                <nav>
                    <a class="btn btn-info" href="index.php" class="active">Home</a>
                    <a class="btn btn-info" onclick="return confirm('Anda akan dilanjutkan ke tabel produk!');" href="produk.php">Produk</a>
                    <a class="btn btn-info" onclick="return confirm('Anda akan dilanjutkan ke tabel pembeli!');" href="pembeli.php">Pembeli</a>
                    <a class="btn btn-info" onclick="return confirm('Anda akan dilanjutkan ke tabel transaksi!');" href="transaksi.php">Transaksi</a>
                    <a class="btn btn-info" onclick="return confirm('Yakin ingin Log Out?');" href="login.php">Log Out</a>
                </nav>
            </ul>
           



        
