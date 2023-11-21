<?php

// index.php

// Menggunakan class Barang yang didefinisikan di file barang.php
require_once 'data/barang.php';

// Menggunakan class komputer yang didefinisikan di file komputer.php
require_once 'data/komputer.php';

// Menggunakan class makanan yang didefinisikan di file makanan.php
require_once 'data/makanan.php';

// Membuat objek barang
$barang1 = new Barang("Laptop", 5, "Laptop kelas atas", "https://picsum.photos/id/20/200/200");

// Membuat objek komputer
$komputer1 = new Komputer("acer", "nitro", "2 tahun", 5, "Laptop kelas atas", "https://picsum.photos/id/40/200/200");

// Membuat objek makanan
$makanan1 = new Makanan("kue", 2, 1, 5, "kue terlaris", "https://picsum.photos/id/60/200/200");

?>

<!-- masukan code html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Objek Barang</title>
</head>

<body>

    <h1>Daftar Barang</h1>
    <h3>Object dari class barang</h3>
    <?php
    // Menampilkan informasi objek barang
    $barang1->tampilkanInfo();
    ?>
    <a href="barang_page.php">lihat semua</a>
    <hr>
    <h3>Object dari class komputer</h3>    
    <?php
    // Menampilkan informasi objek komputer
    $komputer1->tampilkanInfoKomputer();
    ?>
    <a href="komputer_page.php">lihat semua</a>
    <hr>
    <h3>Object dari class makanan</h3>
    <?php
    // Menampilkan informasi objek komputer
    $makanan1->tampilkanInfoMakanan();
    ?>
    <a href="makanan_page.php">lihat semua</a>
    <hr>
</body>

</html>