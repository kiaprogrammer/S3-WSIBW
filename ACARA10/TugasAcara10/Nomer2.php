<?php
class ItemProduk {
    protected $ukuran;
    protected $warna;
    protected $nama;

    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }

    public function getUkuran() {
        return $this->ukuran;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}
?>

<?php
class Topi extends ItemProduk {
    private $model;

    public function setModel($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }
}
?>

<?php
class Celana extends ItemProduk {
    private $tipe;
    private $model;

    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    public function getTipe() {
        return $this->tipe;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }
}
?>

<?php
class Baju extends ItemProduk {
    private $tipe;

    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    public function getTipe() {
        return $this->tipe;
    }
}
?>

<?php
// Membuat objek dari class Topi
$topi = new Topi();
$topi->setNama("Topi Baseball");
$topi->setUkuran("L");
$topi->setWarna("Merah");
$topi->setModel("Snapback");

echo "Nama: " . $topi->getNama() . "\n";
echo "Ukuran: " . $topi->getUkuran() . "\n";
echo "Warna: " . $topi->getWarna() . "\n";
echo "Model: " . $topi->getModel() . "\n\n";

// Membuat objek dari class Celana
$celana = new Celana();
$celana->setNama("Celana Jeans");
$celana->setUkuran("32");
$celana->setWarna("Biru");
$celana->setTipe("Slim Fit");
$celana->setModel("Ripped");

echo "Nama: " . $celana->getNama() . "\n";
echo "Ukuran: " . $celana->getUkuran() . "\n";
echo "Warna: " . $celana->getWarna() . "\n";
echo "Tipe: " . $celana->getTipe() . "\n";
echo "Model: " . $celana->getModel() . "\n\n";

// Membuat objek dari class Baju
$baju = new Baju();
$baju->setNama("Baju Kemeja");
$baju->setUkuran("M");
$baju->setWarna("Putih");
$baju->setTipe("Formal");

echo "Nama: " . $baju->getNama() . "\n";
echo "Ukuran: " . $baju->getUkuran() . "\n";
echo "Warna: " . $baju->getWarna() . "\n";
echo "Tipe: " . $baju->getTipe() . "\n";
?>
