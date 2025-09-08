<?php

/**
 * Class Segitiga
 * Merepresentasikan sebuah objek segitiga dengan properti dan metode
 * untuk menghitung luas, keliling, dan menentukan jenisnya.
 */
class Segitiga
{
    // Properti privat untuk menyimpan data segitiga
    private float $alas;
    private float $tinggi;
    private float $sisi1;
    private float $sisi2;
    private float $sisi3;

    /**
     * Constructor untuk membuat objek Segitiga baru.
     *
     * @param float $a  Nilai alas segitiga.
     * @param float $t  Nilai tinggi segitiga.
     * @param float $s1 Nilai sisi pertama.
     * @param float $s2 Nilai sisi kedua.
     * @param float $s3 Nilai sisi ketiga.
     */
    public function __construct(float $a, float $t, float $s1, float $s2, float $s3)
    {
        $this->alas = $a;
        $this->tinggi = $t;
        $this->sisi1 = $s1;
        $this->sisi2 = $s2;
        $this->sisi3 = $s3;
    }

    /**
     * Menghitung luas segitiga.
     * Rumus: 0.5 * alas * tinggi
     *
     * @return float Luas segitiga.
     */
    public function hitungLuas(): float
    {
        return 0.5 * $this->alas * $this->tinggi;
    }

    /**
     * Menghitung keliling segitiga.
     * Rumus: sisi1 + sisi2 + sisi3
     *
     * @return float Keliling segitiga.
     */
    public function hitungKeliling(): float
    {
        return $this->sisi1 + $this->sisi2 + $this->sisi3;
    }

    /**
     * Mengecek jenis segitiga berdasarkan panjang sisinya.
     *
     * @return string Jenis segitiga ("Sama Sisi", "Sama Kaki", atau "Sembarang").
     */
    public function cekJenis(): string
    {
        if ($this->sisi1 == $this->sisi2 && $this->sisi2 == $this->sisi3) {
            return "Sama Sisi";
        } elseif ($this->sisi1 == $this->sisi2 || $this->sisi2 == $this->sisi3 || $this->sisi1 == $this->sisi3) {
            return "Sama Kaki";
        } else {
            return "Sembarang";
        }
    }

    /**
     * Menampilkan semua informasi segitiga dalam format yang sudah ditentukan.
     */
public function tampilkanInfo(): void
{
    echo "<pre>"; // Tambahkan baris ini
    echo "===== INFORMASI SEGITIGA ======\n";
    echo "Alas : " . $this->alas . "\n";
    echo "Tinggi : " . $this->tinggi . "\n";
    echo "Sisi : " . $this->sisi1 . ", " . $this->sisi2 . ", " . $this->sisi3 . "\n";
    echo "Luas : " . $this->hitungLuas() . "\n";
    echo "Keliling : " . $this->hitungKeliling() . "\n";
    echo "Jenis: " . $this->cekJenis() . "\n";
    echo "===============================\n";
    echo "</pre>"; // Tambahkan baris ini
}
}
