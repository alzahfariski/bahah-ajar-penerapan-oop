<?php

// import untuk mengakses data barang
require_once 'barang.php';

// buat kelas komputer dengan memiliki pewarisan kelas barang
class Komputer extends barang{

    // tambahkan property yang hanya dimiliki komputer
    var string $merek;
    var string $garansi;

     // buat Constructor 
     public function __construct($nama,$merek,$garansi, $jumlah, $deskripsi, $gambarUrl)
     {
         $this->nama = $nama;
         $this->merek = $merek;
         $this->garansi = $garansi;
         $this->jumlah = $jumlah;
         $this->deskripsi = $deskripsi;
         $this->gambarUrl = $gambarUrl;
     }

    // hanya contoh
    // tambah kan function jika di perlukan
    function tambahKomputer(){
        // masukan perintah tambah komputer
    }

    // tambahkan function lain seperti hapus atau edit dll jika di perlukan
    // contoh function untuk menampilkan informasi barang
    public function tampilkanInfoKomputer()
    {
        echo "<p>Nama: $this->nama</p>";
        echo "<p>Merek: $this->merek</p>";
        echo "<p>garansi: $this->garansi</p>";
        echo "<p>Jumlah: $this->jumlah</p>";
        echo "<p>Deskripsi: $this->deskripsi</p>";
        echo "<img src=\"$this->gambarUrl\" alt=\"Gambar $this->nama\" width=\"150\">";
        echo "<hr>";
    }
}
