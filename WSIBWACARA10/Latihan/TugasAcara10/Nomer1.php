<?php
class mobilLengkap {
    // Method untuk menyalakan TV
    public function nontonTV() {
        echo "TV dihidupkan"."\n";
        echo "TV mencari Chanel"."\n";
        echo "TV menampilkan gambar"."\n";
    }

    // Method untuk menyalakan mobil
    public function hidupkanMobil() {
        echo "Mobil dihidupkan"."\n";
    }

    // Method untuk mematikan mobil
    public function matikanMobil() {
        echo "Mobil dimatikan"."\n";
    }

    // Method untuk mengubah gigi mobil
    public function ubahGigi($gigi) {
        echo "Gigi mobil diubah ke " . $gigi . "\n";
    }
}
?>
<?php
class MobilBMW extends mobilLengkap {
    // Anda bisa menambahkan method atau properti spesifik untuk MobilBMW di sini jika diperlukan
}
?>
<?php
class MobilBMWberaksi {
    private $mobilBMW;

    public function __construct() {
        $this->mobilBMW = new MobilBMW();
    }

    public function nontonTV() {
        $this->mobilBMW->nontonTV();
    }

    public function hidupkanMobil() {
        $this->mobilBMW->hidupkanMobil();
    }

    public function matikanMobil() {
        $this->mobilBMW->matikanMobil();
    }

    public function ubahGigi($gigi) {
        $this->mobilBMW->ubahGigi($gigi);
    }
}
?>
<?php
// Membuat objek dari class MobilBMWberaksi
$aksiMobil = new MobilBMWberaksi();
// Memanggil method-method yang ada di MobilBMWberaksi
$aksiMobil->hidupkanMobil();
$aksiMobil->nontonTV();
$aksiMobil->ubahGigi(2);
$aksiMobil->matikanMobil();
?>
