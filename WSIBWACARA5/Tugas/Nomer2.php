<?php
// Mengambil informasi tanggal saat ini
$tglSkrg = getdate();

// Mendapatkan nilai hari, bulan, dan tahun
$hari = $tglSkrg['mday'];
$bulan = $tglSkrg['mon'];
$tahun = $tglSkrg['year'];

// Format menjadi dd-mm-yyyy
$tanggalFormat = sprintf("%02d-%02d-%04d", $hari, $bulan, $tahun);

// Menampilkan tanggal
echo "Tanggal sekarang: $tanggalFormat";
?>
