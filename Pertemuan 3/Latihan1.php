<?php
class persegipanjang{
    public $panjang;
    public $lebar;

// constructor
    public function __construct($p, $l){
        $this->panjang = $p;
        $this->lebar = $l;
    }

    public function luas(){
        return $this->panjang * $this->lebar;
    }

    public function keliling(){
        return 2 * ($this->panjang + $this->lebar);
    }
}
$hasil = new persegipanjang(10, 5);
echo "Luas: " . $hasil->luas() . "\n";
echo "Keliling: " . $hasil->keliling() . "\n";
//output
// Luas: 50
// Keliling: 30