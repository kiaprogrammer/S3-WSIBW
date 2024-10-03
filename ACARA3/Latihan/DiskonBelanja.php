<?php // Kasus 1: Memeriksa Apakah Seseorang Dewasa dan Menentukan Kategori Umur
$age = 25;

if ($age >= 18) {
    echo "Anda sudah dewasa. "."\n";
} else {
    echo "Anda belum dewasa. "."\n";
}

if ($age < 13) {
    echo "Anda seorang anak-anak."."\n";
} elseif ($age >= 13 && $age <= 19) {
    echo "Anda seorang remaja."."\n";
} elseif ($age >= 20 && $age <= 59) {
    echo "Anda seorang dewasa."."\n";
} else {
    echo "Anda seorang lansia."."\n";
}
?>

<?php // Kasus 2: Menentukan Diskon Berdasarkan Kategori Umur
$age = 25;
$discount = 0;

if ($age < 13) {
    $discount = 50;
} elseif ($age >= 13 && $age <= 19) {
    $discount = 20;
} elseif ($age >= 20 && $age <= 59) {
    $discount = 10;
} else {
    $discount = 30;
}

echo "Diskon Anda adalah $discount%."."\n";
?>

<?php // Kasus 3: Memeriksa Keanggotaan dan Menambahkan Diskon
$isMember = true;
$discount = 10; // Diskon awal dari kasus sebelumnya

if ($isMember) {
    $discount += 10; // Tambahan diskon untuk anggota
    echo "Sebagai anggota, Anda mendapatkan tambahan diskon 10%. "."\n";
}

echo "Total diskon Anda adalah $discount%."."\n";
?>

<?php // Kasus 4: Memeriksa Hari dalam Seminggu dan Menambahkan Diskon Akhir Pekan
$dayOfWeek = "Saturday";
$discount = 20; // Diskon dari kasus sebelumnya

switch ($dayOfWeek) {
    case "Saturday":
    case "Sunday":
        $discount += 5; // Tambahan diskon untuk pembelian di akhir pekan
        echo "Karena Anda berbelanja di akhir pekan, Anda mendapatkan tambahan diskon 5%. "."\n";
        break;
    default:
        echo "Hari ini adalah hari kerja. "."\n";
        break;
}

echo "Total diskon Anda adalah $discount%."."\n";
?>

<?php // Kasus 5: Memeriksa Jumlah Pembelian dan Menentukan Apakah Diskon Diberikan
$totalPurchase = 150; // Total pembelian dalam dolar
$discount = 25; // Diskon dari kasus sebelumnya

if ($totalPurchase > 100) {
    $discount += 5; // Tambahan diskon untuk pembelian lebih dari $100
    echo "Karena pembelian Anda lebih dari $100, Anda mendapatkan tambahan diskon 5%. "."\n";
}

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue; // Lewati angka genap
    }
    echo "$i "."\n";
}

echo "Total diskon Anda adalah $discount%."."\n";
?>
