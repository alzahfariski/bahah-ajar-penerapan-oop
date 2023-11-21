<?php

// merupakan class barang
class Barang{

    // property dari class barang
    var string $nama;
    var int $jumlah;
    var string $deskripsi;
    public string $gambarUrl;

     // buat Constructor 
     public function __construct($nama, $jumlah, $deskripsi, $gambarUrl)
     {
         $this->nama = $nama;
         $this->jumlah = $jumlah;
         $this->deskripsi = $deskripsi;
         $this->gambarUrl = $gambarUrl;
     }

    // hanya contoh
    // tambah kan function jika di perlukan
    function tambahBarang(){
        // masukan perintah tambah barang
    }

    // tambahkan function lain seperti hapus atau edit dll jika di perlukan
    // contoh function untuk menampilkan informasi barang
    public function tampilkanInfo()
    {
        echo "<p>Nama: $this->nama</p>";
        echo "<p>Jumlah: $this->jumlah</p>";
        echo "<p>Deskripsi: $this->deskripsi</p>";
        echo "<img src=\"$this->gambarUrl\" alt=\"Gambar $this->nama\" width=\"150\">";
        echo "<hr>";
    }
}