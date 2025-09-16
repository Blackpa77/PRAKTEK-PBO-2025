<?php
//Buat class motor
class motor
{
  //property dengan hak akses protected
  protected $jenis_mesin = "Yamaha CB JKT 48";
}
//buat class yamaha
class yamaha extends motor
{
  public function tampilkan_jenismesin()
  {
    return $this->jenis_mesin;
  }
}
//buat objek dari class yamaha (instantiation)
$yamaha_yuda = new yamaha();
//jalankan method
echo $yamaha_yuda->tampilkan_jenismesin(); //“Yamaha CB JKT 48”