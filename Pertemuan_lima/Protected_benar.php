<?php
// buat class mobil
class mobil
{
  // buat protected property
  protected $pemilik = "yuda";
  public function akses_pemilik()
  {
    return $this->pemilik;
  }
  protected function hidupkan_mobil()
  {
    return "Hidupkan Mobil";
  }
  public function paksa_hidup()
  {
    return $this->hidupkan_mobil();
  }
}
// buat objek dari class mobil (instansiasi)
$mobil_yuda = new mobil();
// jalankan method akses_pemilik()
echo $mobil_yuda->akses_pemilik(); // "yuda"
echo "\n";
// jalankan method paksa_hidup()
echo $mobil_yuda->paksa_hidup(); // "Hidupkan Mobil"