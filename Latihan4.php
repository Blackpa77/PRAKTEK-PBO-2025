<?php
class Buku
{
    public $judul;
    public $penulis;
    public $tahun;

    public function __construct($judul, $penulis, $tahun)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }
}

class Perpustakaan
{
    private $daftarBuku = [];

    /**

     * @param Buku
     */
    public function tambahBuku(Buku $buku)
    {
        $this->daftarBuku[] = $buku;
        echo "-> Buku '{$buku->judul}' berhasil ditambahkan.\n";
    }

    public function tampilkanBuku()
    {
        echo "\n--- Daftar Buku di Perpustakaan ---\n";
        foreach ($this->daftarBuku as $index => $buku) {
            echo ($index + 1) . ". Judul   : {$buku->judul}\n";
            echo "   Penulis : {$buku->penulis}\n";
            echo "   Tahun   : {$buku->tahun}\n\n";
        }
        echo "-----------------------------------\n";
    }
}


$perpustakaan = new Perpustakaan();
echo "Mempersiapkan perpustakaan...\n\n";


$buku1 = new Buku("10 Dosa besar Soeharto", "No name", 2005);
$buku2 = new Buku("Trik kaya diusia manula", "Penulis", 1980);
$buku3 = new Buku(" Cara memasak kambing tanpa kambing", "Eka", 2002);


$perpustakaan->tambahBuku($buku1);
$perpustakaan->tambahBuku($buku2);
$perpustakaan->tambahBuku($buku3);

$perpustakaan->tampilkanBuku();

?>