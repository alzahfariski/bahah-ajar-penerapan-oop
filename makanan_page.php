<?php

// Menggunakan class makanan yang didefinisikan di file makanan.php
require_once 'data/makanan.php';

// Membuat objek makanan
$makanan1 = new Makanan("kue", 2, 1, 5, "kue terlaris", "https://picsum.photos/id/61/200/200");
$makanan2 = new Makanan("kue", 2, 1, 5, "kue terlaris", "https://picsum.photos/id/62/200/200");
$makanan3 = new Makanan("kue", 2, 1, 5, "kue terlaris", "https://picsum.photos/id/63/200/200");
$makanan4 = new Makanan("kue", 2, 1, 5, "kue terlaris", "https://picsum.photos/id/64/200/200");

?>

<!-- masukan code html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Objek Makanan</title>
</head>

<body>

    <h1>Daftar barang</h1>
    
    <h3>Object dari class makanan</h3>
    <?php
    // Menampilkan informasi objek komputer
    $makanan1->tampilkanInfoMakanan();
    $makanan2->tampilkanInfoMakanan();
    $makanan3->tampilkanInfoMakanan();
    $makanan4->tampilkanInfoMakanan();
    ?>   

</body>

</html>