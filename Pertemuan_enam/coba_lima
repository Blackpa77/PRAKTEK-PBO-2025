<?php
/**
 * belajar construktor dan destruktor
 */
class mobil
{
  private $pemilik = "DIKI";
  private $merk = "Honda";


  public function __construct()
  {
    echo "Ini berasal dari constructor mobil";
  }
  public function hidupkan_mobil()
  {
    return "Hidupkan Mobil $this->merk punya $this->pemilik";
  }


  public function __destruct()
  {
    echo "Ini berasal dari Destructor Mobil";
  }
}


//Buat objek dari class mobil (instansiasi)
$mobil_erfan = new mobil();
echo "<br>";
echo $mobil_erfan->hidupkan_mobil();
echo "<br>";




// hapus objek $laptop_andi
unset($mobil_erfan);




echo "<br />";
echo "Objek Telah Dihancurkan";