<?php 
//buat class kendaraan  
class kendaraan{ 
 // property dengan hak akses private 
 private $jenis_mesin ="AKATURBO JET NUKLIR";  public function tampilkan_mesin(){ 
 return $this->jenis_mesin; 
 } 
} 
//buat class motor 
class motor extends kendaraan{ 
public function tampilkan_mesin(){ 
return $this->jenis_mesin; 
} 
} 
// buat objek dari class motor (instantiation) $kendaraan_motor = new kendaraan(); 
$motor_honda = new motor(); 
//jalankan method dari class kendaraan 
echo $kendaraan_motor->tampilkan_mesin(); //AKA 748 TURBO JET NUKLIR 
//jalankan method dari class motor (error) 
echo $motor_honda->tampilkan_mesin(); 
//notice:Undefined property: motor::$jenis_mesin 
// ?> 
