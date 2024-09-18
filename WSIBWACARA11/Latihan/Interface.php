<?php

// Definisikan interface hitungluas
interface hitungLuas{
    public function hitungLuasPersegi();
    public function hitungLuasSegitiga();
    public function hitungLuasLingkaran();
}

// Class untuk menghitung luas persegi
class Persegi implements hitungLuas{
    private $sisi;
    public function __construct($sisi){
        $this->sisi = $sisi;
    }
    public function hitungLuasPersegi(){
        return $this->sisi * $this->sisi;
    }
    public function hitungLuasSegitiga(){
        return "Method ini tidak relevan untuk Persegi.";
    }
    public function hitungLuasLingkaran(){
        return "Method ini tidak relevan untuk Persegi.";
    }
}

// Class untuk menghitung luas segitiga
class Segitiga implements hitungLuas{
    private $sisi; // sisi ini diartikan sebagai alas
    private $tinggi;
    public function __construct($sisi, $tinggi){
        $this->sisi = $sisi;
        $this->tinggi = $tinggi;
    }
    public function hitungLuasPersegi(){
    return "Method ini tidak relevan untuk Segitiga.";
    }
    public function hitungLuasSegitiga(){
    return 0.5 * $this->sisi * $this->tinggi;
    }
    public function hitungLuasLingkaran(){
    return "Method ini tidak relevan untuk Segitiga.";
    }
}

// Class untuk menghitung luas Lingkaran

class Lingkaran implements hitungLuas{
    private $radius;
    public function __contrust($radius) {
        $this->radius = $radius;
    }
     public function hitungLuasPersegi() {
        return "Method ini tidak relevan untuk Lingkaran";
    }
    public function hitungLuasSegitiga(){
        return "Method ini tidak relevan untuk Lingkaran";
    }
    public function hitungLuasLingkaran(){
        return pi() * $this->radius * $this->radius;
    }
}

// Membuat objek dari masing-masing class
$persegi = new Persegi(4);
$segitiga = new Segitiga(3,4);
$lingkaran = new Lingkaran(21);

echo "Luas Persegi: ". $persegi->hitungLuasPersegi()." satuan persegi\n";
echo "Luas Segitiga: ". $segitiga->hitungLuasSegitiga()." satuan persegi\n";
echo "Luas Lingkaran: ". $lingkaran->hitungLuasLingkaran()." satuan persegi\n";
?>
