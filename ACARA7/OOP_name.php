<?php
class Person {
    public $name; // Gunakan visibilitas public untuk properti

    // Setter untuk properti name
    public function set_name($new_name) {
        $this->name = $new_name;
    }

    // Getter untuk properti name
    public function get_name() {
        return $this->name;
    }

    // Destructor
    public function __destruct() {
        echo "\n"."-end class-";
    }
}

// Membuat instance dari kelas Person
$person1 = new Person();

// Mengatur nama untuk person1
$person1->set_name("Stefan");

// Mendapatkan dan menampilkan nama dari person1
echo "Nama: " . $person1->get_name() . "\n";

// Saat script selesai, destructor akan dipanggil secara otomatis
?>
