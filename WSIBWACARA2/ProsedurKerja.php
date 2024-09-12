<?php // Nama file : Variabel.php
$nim = "E41231785"; 
$nama = "Muhammad Aulia Azkia Rahman";
$prodi = "Teknik Informatika";
$judul = "Prosedur Kerja";
$acara = " Acara 2";
$judul .= $acara;
echo "---Selamat Praktikum----"."\n";
echo $judul."\n"."\n";
echo "---1. Variabel----"."\n";
echo "NIM : "."$nim"."\n";
echo "NAMA : "."$nama"."\n";
echo "PRODI : "."$prodi"."\n";
?>

<?php // Nama file : tipedata.php
echo "---2. Tipe Data---"."\n"; 
$x = 5985;
var_dump($x);
$x = -345; // negative number
var_dump($x);
$x = 0x8C; // hexadecimal number
var_dump($x);
$x = 047; // octal number
var_dump($x);
$x = 10.365;
var_dump($x);
$x = 2.4e3;
var_dump($x);
$x = 8E-5;
var_dump($x);
echo strlen("Hello world!")."\n";
?>

<?php // Nama file : operator1.php
$tugas1 = 90; 
$tugas2 = 80;
$jumlah = $tugas1 + $tugas2;
$rerata = $jumlah / 2;
echo "---3. Operator---"."\n";
echo "Operator1"."\n";
echo "Nilai Tugas I : ".$tugas1."\n";
echo "Nilai Tugas II : ".$tugas2."\n";
echo "Jumlah Tugas : ".$jumlah."\n";
echo "Rerata Tugas : ".$rerata."\n";
?>

<?php // Nama file : operator2.php
$x = 10;
$y = 6;
echo "Operator2"."\n";
echo "$x + $y : ".($x + $y)."\n";
echo "$x - $y : ".($x - $y)."\n";
echo "$x * $y : ".($x * $y)."\n";
echo "$x / $y : ".($x / $y)."\n";
echo "$x % $y : ".($x % $y)."\n";
$a = "Hello";
$b = $a." world!";
echo $b."\n";
echo $a." -- ".$b." ini string operator "."\n";
?>
