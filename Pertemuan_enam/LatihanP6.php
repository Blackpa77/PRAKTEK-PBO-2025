<?php
class Bunga {
    private $nama;
    private $warna;

    public function __construct($nama, $warna) {
        $this->nama = $nama;
        $this->warna = $warna;
        echo "Sebuah bunga baru telah mekar! Ini adalah " . $this->nama . " berwarna " . $this->warna . ".<br>";
    }

    public function informasi() {
        return "Ini adalah bunga " . $this->nama . " yang indah dengan warna " . $this->warna . ".";
    }

    public function __destruct() {
        echo "Bunga " . $this->nama . " telah layu dan dibersihkan dari memori.<br>";
    }
}

$bungaMawar = new Bunga("Mawar", "Merah");
echo $bungaMawar->informasi();
echo "<br>";
?>