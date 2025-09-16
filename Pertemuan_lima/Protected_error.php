<?php
//Buat Class Mobil
class Mobil
{
  // buat public property
  protected $pemilik;
  //Buat public method
  protected function hidupkan_mobil()
  {
    return "Hidupkan Mesin Mobil";
  }
}
//Buat objek dari class mobil (instansiasi)
$mobil_yuda = new mobil();
//Set protected Property akan menghasilkan error
$mobil_yuda->pemilik = "Syahrukhan";
//Fatal error: Cannot access protected property mobil::$pemilik
//Tampilkan protected property akan menghasilkan error
echo $mobil_yuda->pemilik; //Syahrukhan


//Fatal error: Cannot access protected property mobil::$pemilik
//Jalankan protected Method akan menghasilkan error
echo $mobil_yuda->hidupkan_mobil(); //hidupkan mobil
//Fatal error: Call to protected method mobil::hidupkan_mobil() from
