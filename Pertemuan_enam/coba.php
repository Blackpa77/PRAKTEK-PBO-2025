<?php
class mobil {
    public $pemilik="Ahmad kasim";
    public $merek=" Esemka";
    public $warna;

    // ini adalah nama nama dari berbagai jenis tanda petik
    // return 'tip'
    // return "double tip"
    // return `backtick tip`

    public function hidupkan_mobil() {
        return "hidupkan mesin mobil. $this->pemilik";
    }
    
    public function matikan_mobil() {
        return "matikan mesin mobil. $this->pemilik";
    }
}

$mobil1 = new mobil();
echo $mobil1->hidupkan_mobil();
echo "\n";
echo $mobil1->pemilik;