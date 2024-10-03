<?php

class Tablet {
    public $merk;
    public $camera;
    public $memory;

    public function __construct($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    public function displayInfo() {
        return "Merk: $this->merk, Camera: $this->camera MP, Memory: $this->memory GB";
    }
}

class Handphone extends Tablet {
    public $handphone_baru;

    public function __construct($merk, $camera, $memory, $handphone_baru) {
        parent::__construct($merk, $camera, $memory);
        $this->handphone_baru = $handphone_baru;
    }

    public function beli_handphone() {
        return "Beli handphone baru: $this->handphone_baru";
    }
}

$handphone = new Handphone("Samsung", 108, 128, "Galaxy S23");
echo $handphone->beli_handphone()."\n"; // Mengakses method public dari Handphone
echo $handphone->displayInfo(); // Mengakses method public dari Tablet
echo "\n";
?>
