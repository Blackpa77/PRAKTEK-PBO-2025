<?php
class Produk
{
    public $nama;
    public $harga;
    public $stok;

    public function __construct($nama, $harga, $stok)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function tampilkanInfo()
    {
        echo "Nama: {$this->nama}, Harga: {$this->harga}, Stok: {$this->stok}\n";
    }

    public function beliProduk($jumlah)
    {
        $this->stok -= $jumlah;
    }
}

$produk = new Produk("Buku", 50000, 20);

$produk->tampilkanInfo();
// Output: Nama: Buku, Harga: 50000, Stok: 20

$produk->beliProduk(5);

$produk->tampilkanInfo();
// Output: Nama: Buku, Harga: 50000, Stok: 15