<?php

// Menggunakan class barang yang didefinisikan di file barang.php
require_once 'data/barang.php';

// Membuat objek barang
$barang1 = new Barang("Laptop", 5, "Laptop kelas atas", "https://picsum.photos/id/20/200/200");
$barang2 = new Barang("Laptop", 5, "Laptop kelas atas", "https://picsum.photos/id/21/200/200");
$barang3 = new Barang("Laptop", 5, "Laptop kelas atas", "https://picsum.photos/id/22/200/200");
$barang4 = new Barang("Laptop", 5, "Laptop kelas atas", "https://picsum.photos/id/23/200/200");

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
    $barang2->tampilkanInfo();
    $barang3->tampilkanInfo();
    $barang4->tampilkanInfo();
    ?>
    

</body>

</html>