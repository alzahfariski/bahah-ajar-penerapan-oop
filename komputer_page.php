<?php

// Menggunakan class komputer yang didefinisikan di file komputer.php
require_once 'data/komputer.php';

// Membuat objek komputer
$komputer1 = new Komputer("acer", "nitro", "2 tahun", 5, "Laptop kelas atas", "https://picsum.photos/id/40/200/200");
$komputer2 = new Komputer("asus", "tuf", "2 tahun", 10, "laptop terbaru", "https://picsum.photos/id/50/200/200");
$komputer3 = new Komputer("lenuvo", "idea", "2 tahun", 10, "laptop keren", "https://picsum.photos/id/110/200/200");
$komputer4 = new Komputer("mac", "macOs", "2 tahun", 10, "laptop anak muda", "https://picsum.photos/id/120/200/200");

?>

<!-- masukan code html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Objek komputer</title>
</head>

<body>

    <h1>Daftar Barang</h1>
    
    <h3>Object dari class komputer</h3>
    <?php
    // Menampilkan informasi objek komputer
    $komputer1->tampilkanInfoKomputer();
    $komputer2->tampilkanInfoKomputer();
    $komputer3->tampilkanInfoKomputer();
    $komputer4->tampilkanInfoKomputer();
    ?>
    

</body>

</html>