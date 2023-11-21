<?php

// import untuk mengakses data barang
require_once 'barang.php';

// buat kelas makanan dengan memiliki pewarisan kelas barang
class Makanan extends barang{

    // tambahkan property yang hanya dimiliki makanan
    var int $berat;
    var int $penyimpanan;

    // buat Constructor 
    public function __construct($nama, $berat, $penyimpanan, $jumlah, $deskripsi, $gambarUrl)
    {
        $this->nama = $nama;
        $this->berat = $berat;
        $this->penyimpanan = $penyimpanan;
        $this->jumlah = $jumlah;
        $this->deskripsi = $deskripsi;
        $this->gambarUrl = $gambarUrl;
    }

    // hanya contoh
    // tambah kan function jika di perlukan
    function tambahMakanan(){
        // masukan perintah tambah makanan
    }

    // tambahkan function lain seperti hapus atau edit dll jika di perlukan
    public function tampilkanInfoMakanan()
    {
        echo "<p>Nama: $this->nama</p>";
        echo "<p>berat: $this->berat kg</p>";
        echo "<p>penyimpanan: $this->penyimpanan bulan</p>";
        echo "<p>Jumlah: $this->jumlah</p>";
        echo "<p>Deskripsi: $this->deskripsi</p>";
        echo "<img src=\"$this->gambarUrl\" alt=\"Gambar $this->nama\" width=\"150\">";
        echo "<hr>";
    }
}