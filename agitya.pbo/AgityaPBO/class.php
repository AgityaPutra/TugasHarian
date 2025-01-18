<?php
class Mobil {
    public $warna;
    public $merek;

    function __construct($merek, $warna) {
        $this->merek = $merek;
        $this->warna = $warna;
    }

    function info() {
        return "Mobil: $this->merek, Warna: $this->warna";
    }
}

// Membuat objek 'toyota' dari kelas 'Mobil'
$toyota = new Mobil('Toyota', 'Biru Metalik');

// Menampilkan informasi mobil
echo $toyota->info(); // Output: Mobil: Toyota, Warna: Biru Metalik
?>