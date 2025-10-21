<?php

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

class ItemPerpustakaan {
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
}

class Buku extends ItemPerpustakaan {
    private $isbn;

    public function __construct($judul, $penulis, $tahunTerbit, $isbn) {
        parent::__construct($judul, $penulis, $tahunTerbit);
        $this->isbn = $isbn;
    }

    public function pinjam() {
        echo "--> Memproses peminjaman untuk BUKU '{$this->judul}'...\n";
        return parent::pinjam();
    }
}

class DVD extends ItemPerpustakaan {
    private $durasi;

    public function __construct($judul, $penulis, $tahunTerbit, $durasi) {
        parent::__construct($judul, $penulis, $tahunTerbit);
        $this->durasi = $durasi;
    }
    
    public function pinjam() {
        echo "--> Memproses peminjaman untuk DVD '{$this->judul}'...\n";
        return parent::pinjam();
    }
}

class Majalah extends ItemPerpustakaan {
    private $edisi;

    public function __construct($judul, $penulis, $tahunTerbit, $edisi) {
        parent::__construct($judul, $penulis, $tahunTerbit);
        $this->edisi = $edisi;
    }
    
    public function pinjam() {
        echo "--> Memproses peminjaman untuk MAJALAH '{$this->judul}'...\n";
        return parent::pinjam();
    }
}

class Pengguna {
    use Notifiable;
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }
}

class Transaksi {
    use Loggable, Notifiable;

    public function prosesPeminjaman(Pengguna $pengguna, ItemPerpustakaan $item) {
        $this->logActivity("Transaksi peminjaman dimulai oleh {$pengguna->nama} untuk item '{$item->getJudul()}'.");

        if ($item->pinjam()) {
            $this->sendNotification("Kepada {$pengguna->nama}: Anda berhasil meminjam '{$item->getJudul()}'. Jangan lupa kembalikan tepat waktu!");
        } else {
            $this->sendNotification("Kepada {$pengguna->nama}: Mohon maaf, '{$item->getJudul()}' saat ini tidak tersedia untuk dipinjam.");
        }
    }
}

$bukuPemrograman = new Buku("Belajar PHP & MySQL", "Andi Setiawan", 2023, "978-602-04-9893-7");
$dvdFilm = new DVD("The Last of Us: Season 1", "Neil Druckmann", 2023, 520);
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

?>