<?php

class Mahasiswa {
    // Properti publik
    public $nama;
    public $nim;
    public $prodi;


    protected $ipk;
    private $password;

    // Method protected, hanya bisa diakses dari class ini dan turunannya
    protected function getNilaiIPK() {
        return "Nilai IPK mahasiswa adalah " . $this->ipk;
    }

  
    private function getPassword() {
        return "Password akun mahasiswa adalah " . $this->password;
    }

    // Method public untuk mengisi nilai IPK
    public function setNilaiIPK($ipk) {
        $this->ipk = $ipk;
    }

    // Method public untuk mengisi nilai password
    public function setPassword($password) {
        $this->password = $password;
    }

   
    public function tampilkanIPK() {
        return $this->getNilaiIPK();
    }
    

    public function tampilkanPassword() {
        return $this->getPassword();
    }
}

// Membuat objek baru dari class Mahasiswa
$mahasiswa_baru = new Mahasiswa();


$mahasiswa_baru->nama = "Andi emerik";
$mahasiswa_baru->nim = "E31211010";


$mahasiswa_baru->setNilaiIPK(3.85);
$mahasiswa_baru->setPassword('bahlilbahlul123');

// Menampilkan data menggunakan method yang sesuai
// Ganti semua <br> dengan \n
echo "Nama: " . $mahasiswa_baru->nama . "\n";
echo "NIM: " . $mahasiswa_baru->nim . "\n";
echo $mahasiswa_baru->tampilkanIPK() . "\n";
echo $mahasiswa_baru->tampilkanPassword() . "\n";

?>