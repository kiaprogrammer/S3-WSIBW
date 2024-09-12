<?php // Kasus 1: Memeriksa Usia untuk Kategori Umur
$age = 25;

if ($age < 13) {
    echo "Anda seorang anak-anak.";
} elseif ($age >= 13 && $age <= 19) {
    echo "Anda seorang remaja.";
} elseif ($age >= 20 && $age <= 59) {
    echo "Anda seorang dewasa.";
} else {
    echo "Anda seorang lansia.";
}
?>

<?php // Kasus 2: Memeriksa Kategori Umur dan Memberikan Diskon
$age = 25;
$discount = 0;

if ($age < 13) {
    echo "Anda seorang anak-anak.";
    $discount = 50;
} elseif ($age >= 13 && $age <= 19) {
    echo "Anda seorang remaja.";
    $discount = 20;
} elseif ($age >= 20 && $age <= 59) {
    echo "Anda seorang dewasa.";
    $discount = 10;
} else {
    echo "Anda seorang lansia.";
    $discount = 30;
}

echo " Anda mendapatkan diskon sebesar $discount%.";
?>

<?php // Kasus 3: Memeriksa Kategori Umur, Diskon, dan Status Keanggotaan
$age = 25;
$discount = 0;
$isMember = true;

if ($age < 13) {
    echo "Anda seorang anak-anak.";
    $discount = 50;
} elseif ($age >= 13 && $age <= 19) {
    echo "Anda seorang remaja.";
    $discount = 20;
} elseif ($age >= 20 && $age <= 59) {
    echo "Anda seorang dewasa.";
    $discount = 10;
} else {
    echo "Anda seorang lansia.";
    $discount = 30;
}

if ($isMember) {
    $discount += 10; // Tambahan diskon untuk anggota
    echo " Sebagai anggota, Anda mendapatkan tambahan diskon 10%.";
}

echo " Total diskon Anda adalah $discount%.";
?>

<?php // Kasus 4: Memeriksa Kategori Umur, Diskon, Status Keanggotaan, dan Hari Pembelian
$age = 25;
$discount = 0;
$isMember = true;
$dayOfWeek = "Saturday";

if ($age < 13) {
    echo "Anda seorang anak-anak.";
    $discount = 50;
} elseif ($age >= 13 && $age <= 19) {
    echo "Anda seorang remaja.";
    $discount = 20;
} elseif ($age >= 20 && $age <= 59) {
    echo "Anda seorang dewasa.";
    $discount = 10;
} else {
    echo "Anda seorang lansia.";
    $discount = 30;
}

if ($isMember) {
    $discount += 10; // Tambahan diskon untuk anggota
    echo " Sebagai anggota, Anda mendapatkan tambahan diskon 10%.";
}

if ($dayOfWeek == "Saturday" || $dayOfWeek == "Sunday") {
    $discount += 5; // Tambahan diskon untuk pembelian di akhir pekan
    echo " Karena Anda berbelanja di akhir pekan, Anda mendapatkan tambahan diskon 5%.";
}

echo " Total diskon Anda adalah $discount%.";
?>

<?php // Kasus 5: Memeriksa Kategori Umur, Diskon, Status Keanggotaan, Hari Pembelian, dan Jumlah Pembelian
$age = 25;
$discount = 0;
$isMember = true;
$dayOfWeek = "Saturday";
$totalPurchase = 100; // Total pembelian dalam dolar

if ($age < 13) {
    echo "Anda seorang anak-anak.";
    $discount = 50;
} elseif ($age >= 13 && $age <= 19) {
    echo "Anda seorang remaja.";
    $discount = 20;
} elseif ($age >= 20 && $age <= 59) {
    echo "Anda seorang dewasa.";
    $discount = 10;
} else {
    echo "Anda seorang lansia.";
    $discount = 30;
}

if ($isMember) {
    $discount += 10; // Tambahan diskon untuk anggota
    echo " Sebagai anggota, Anda mendapatkan tambahan diskon 10%.";
}

if ($dayOfWeek == "Saturday" || $dayOfWeek == "Sunday") {
    $discount += 5; // Tambahan diskon untuk pembelian di akhir pekan
    echo " Karena Anda berbelanja di akhir pekan, Anda mendapatkan tambahan diskon 5%.";
}

if ($totalPurchase > 100) {
    $discount += 5; // Tambahan diskon untuk pembelian lebih dari $100
    echo " Karena pembelian Anda lebih dari $100, Anda mendapatkan tambahan diskon 5%.";
}

echo " Total diskon Anda adalah $discount%.";
?>
