<?php
function bilanganTerbesar($angka1, $angka2) {
    if ($angka1 > $angka2) {
        return $angka1;
    } else {
        return $angka2;
    }
}

// Contoh penggunaan fungsi
$bil1 = 50;
$bil2 = 200;
$terbesar = bilanganTerbesar($bil1, $bil2);
echo "Bilangan terbesar dari $bil1 dan $bil2 adalah $terbesar.";
?>
