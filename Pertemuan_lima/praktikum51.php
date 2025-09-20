<?php

// 1. Membuat class Mahasiswa dengan property yang ditentukan
class Mahasiswa {
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;
    public $keterangan; // (aktif, cuti, keluar)

    // 2. Menambahkan method getKeterangan()
    public function getKeterangan() {
        return "Status: " . $this->keterangan;
    }
}

echo "--- Data Mahasiswa ---\n\n";

// 3. Membuat 3 objek dari class Mahasiswa dengan data berbeda
// Objek 1: Mahasiswa Aktif
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Purbaya Siregar";
$mahasiswa1->nim = "H1101211092";
$mahasiswa1->prodi = "Sistem Informasi";
$mahasiswa1->angkatan = 2021;
$mahasiswa1->keterangan = "Aktif";

// Objek 2: Mahasiswa Cuti
$mahasiswa2 = new Mahasiswa();
$mahasiswa2->nama = "Luhut Binsar Panjaitan";
$mahasiswa2->nim = "F2011211005";
$mahasiswa2->prodi = "Farmasi";
$mahasiswa2->angkatan = 2021;
$mahasiswa2->keterangan = "Cuti";

// Objek 3: Mahasiswa Keluar
$mahasiswa3 = new Mahasiswa();
$mahasiswa3->nama = "Bahlil Lahadalia";
$mahasiswa3->nim = "A1011201020";
$mahasiswa3->prodi = "Ilmu Hukum";
$mahasiswa3->angkatan = 2020;
$mahasiswa3->keterangan = "Keluar";

// Menampilkan data dan menjalankan method untuk setiap objek
echo "Nama: " . $mahasiswa1->nama . "\n";
echo "NIM: " . $mahasiswa1->nim . "\n";
// Menjalankan method untuk mendapatkan keterangan
echo $mahasiswa1->getKeterangan() . "\n\n"; 

echo "Nama: " . $mahasiswa2->nama . "\n";
echo "NIM: " . $mahasiswa2->nim . "\n";
// Menjalankan method untuk mendapatkan keterangan
echo $mahasiswa2->getKeterangan() . "\n\n";

echo "Nama: " . $mahasiswa3->nama . "\n";
echo "NIM: " . $mahasiswa3->nim . "\n";
// Menjalankan method untuk mendapatkan keterangan
echo $mahasiswa3->getKeterangan() . "\n";

?>