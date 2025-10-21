<?php

// --- BAGIAN 1: DEFINISI TRAITS (Kemampuan tambahan) ---
trait Loggable {
    public function logActivity($message) {
        echo "[LOG - " . date("Y-m-d H:i:s") . "]: " . $message . "\n";
    }
}

trait Notifiable {
    public function sendNotification($message) {
        echo "[NOTIFIKASI]: " . $message . "\n";
    }
}

trait Searchable {
    public function searchByTitle($keyword) {
        if (stripos($this->judul, $keyword) !== false) {
            echo "✅ Item '{$this->judul}' ditemukan dengan kata kunci '{$keyword}'.\n";
        } else {
            echo "❌ Item '{$this->judul}' tidak cocok dengan kata kunci '{$keyword}'.\n";
        }
    }
}


// --- BAGIAN 2: CLASS INDUK (Parent Class) ---
class ItemPerpustakaan {
    // Menggunakan traits
    use Loggable, Searchable;

    protected $judul;
    protected $penulis;
    protected $tahunTerbit;
    protected $status = 'Tersedia';

    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function pinjam() {
        if ($this->status === 'Tersedia') {
            $this->status = 'Dipinjam';
            $this->logActivity("Status item '{$this->judul}' berhasil diubah menjadi 'Dipinjam'.");
            return true;
        } else {
            $this->logActivity("Gagal meminjam item '{$this->judul}' karena sedang tidak tersedia.");
            return false;
        }
    }

    public function kembalikan() {
        if ($this->status === 'Dipinjam') {
            $this->status = 'Tersedia';
            $this->logActivity("Item '{$this->judul}' telah dikembalikan.");
        }
    }
    
    public function getDetail() {
        return "Judul: {$this->judul}, Penulis: {$this->penulis}, Tahun: {$this->tahunTerbit}, Status: {$this->status}";
    }
}


// --- BAGIAN 3: CLASS ANAK (Child Classes) ---

// Class Buku mewarisi dari ItemPerpustakaan
class Buku extends ItemPerpustakaan {
    private $isbn; // Properti spesifik

    public function __construct($judul, $penulis, $tahunTerbit, $isbn) {
        parent::__construct($judul, $penulis, $tahunTerbit);
        $this->isbn = $isbn;
    }

    public function pinjam() {
        echo "--> Memproses peminjaman untuk BUKU '{$this->judul}'...\n";
        return parent::pinjam();
    }

    // Override method untuk tambah info spesifik
    public function getDetail() {
        return parent::getDetail() . ", ISBN: {$this->isbn}";
    }
}

// Class DVD mewarisi dari ItemPerpustakaan
class DVD extends ItemPerpustakaan {
    private $durasi; // Properti spesifik

    public function __construct($judul, $penulis, $tahunTerbit, $durasi) {
        parent::__construct($judul, $penulis, $tahunTerbit);
        $this->durasi = $durasi;
    }
    
    public function pinjam() {
        echo "--> Memproses peminjaman untuk DVD '{$this->judul}'...\n";
        return parent::pinjam();
    }

    // Override method untuk tambah info spesifik
    public function getDetail() {
        return parent::getDetail() . ", Durasi: {$this->durasi} menit";
    }
}

class Majalah extends ItemPerpustakaan {
    private $edisi; // Properti spesifik

    public function __construct($judul, $penulis, $tahunTerbit, $edisi) {
        parent::__construct($judul, $penulis, $tahunTerbit);
        $this->edisi = $edisi;
    }
    
    public function pinjam() {
        echo "--> Memproses peminjaman untuk MAJALAH '{$this->judul}'...\n";
        return parent::pinjam();
    }
    
    public function getDetail() {
        return parent::getDetail() . ", Edisi: {$this->edisi}";
    }
}


// --- BAGIAN 4: CLASS LAIN PENGGUNA TRAITS ---
class Pengguna {
    use Notifiable; // Pengguna bisa dinotifikasi
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }
}

class Transaksi {
    use Loggable, Notifiable; // Transaksi bisa log dan notifikasi

    public function prosesPeminjaman(Pengguna $pengguna, ItemPerpustakaan $item) {
        $this->logActivity("Transaksi peminjaman dimulai oleh {$pengguna->nama} untuk item '{$item->getJudul()}'.");

        if ($item->pinjam()) {
            $this->sendNotification("Kepada {$pengguna->nama}: Anda berhasil meminjam '{$item->getJudul()}'. Jangan lupa kembalikan tepat waktu!");
        } else {
            $this->sendNotification("Kepada {$pengguna->nama}: Mohon maaf, '{$item->getJudul()}' saat ini tidak tersedia untuk dipinjam.");
        }
    }
}


// --- BAGIAN 5: EKSEKUSI PROGRAM ---

// Tag <pre> untuk merapikan output di browser
echo "<pre>";

$bukuPemrograman = new Buku("Belajar PHP & MySQL", "Andi Setiawan", 2023, "978-602-04-9893-7");
$dvdFilm = new DVD("The Last of Us: Season 1", "Neil Druckmann", 2023, 520);
$majalahSains = new Majalah("National Geographic", "Various", 2023, "Oktober 2023");
$pengguna = new Pengguna("Mahasiswa Untan");
$transaksi = new Transaksi();


echo "========================================\n";
echo "### SKENARIO 1: Peminjaman Berhasil ###\n";
echo "========================================\n";
$transaksi->prosesPeminjaman($pengguna, $bukuPemrograman);

echo "\n=======================================================\n";
echo "### SKENARIO 2: Mencoba Meminjam Item yang Sama Lagi ###\n";
echo "=======================================================\n";
$transaksi->prosesPeminjaman($pengguna, $bukuPemrograman);

echo "\n=======================================================\n";
echo "### SKENARIO 3: Menggunakan Kemampuan dari Trait Searchable ###\n";
echo "=======================================================\n";
$bukuPemrograman->searchByTitle("PHP");
$dvdFilm->searchByTitle("PHP");
$dvdFilm->searchByTitle("Last of Us");

echo "\n=======================================================\n";
echo "### SKENARIO 4: Menampilkan Properti Spesifik (ISBN, Durasi, dll) ###\n";
echo "=======================================================\n";
// Memanggil method getDetail() yang sudah di-override
echo "Detail Buku   : " . $bukuPemrograman->getDetail() . "\n";
echo "Detail DVD    : " . $dvdFilm->getDetail() . "\n";
echo "Detail Majalah: " . $majalahSains->getDetail() . "\n";


echo "</pre>";

?>