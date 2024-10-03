<?php
$angka = 2;

if ($angka % 2 == 0) {
    echo "$angka adalah bilangan genap.";
} else {
    echo "$angka adalah bilangan ganjil. ";

    switch ($angka) {
        case 1:
            echo "Angka ini adalah satu.";
            break;
        case 3:
            echo "Angka ini adalah tiga.";
            break;
        case 5:
            echo "Angka ini adalah lima.";
            break;
        default:
            echo "Angka ini bukan satu, tiga, atau lima.";
            break;
    }
}
?>
