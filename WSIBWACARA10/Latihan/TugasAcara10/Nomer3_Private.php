<?php

class Tablet {
    private $merk;
    private $camera;
    private $memory;

    public function __construct($merk, $camera, $memory) {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    private function displayInfo() {
        return "Merk: $this->merk, Camera: $this->camera MP, Memory: $this->memory GB";
    }

    public function getDisplayInfo() {
        return $this->displayInfo(); // Mengakses method private dari Tablet
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

$handphone = new Handphone("OnePlus", 50, 256, "OnePlus 11");
echo $handphone->beli_handphone()."\n";; // Mengakses method public dari Handphone
echo $handphone->getDisplayInfo(); // Mengakses method private melalui method public

?>
