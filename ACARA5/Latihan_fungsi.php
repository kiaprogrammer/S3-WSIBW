<?php
echo "Membuat Fungsi"."\n";
function berhasil()
{
    echo "Selamat Anda Berhasil"."\n";
};
function gagal()
{
    echo "Maaf Anda Gagal"."\n";
}
$nilai = 90;
if ($nilai>=75)
{berhasil();
}
else "\n";
echo "Fungsi Dengan Parameter"."\n";
function Jumlah ($a,$b)// fungsi dengan 2 parameter
{return $a+$b;
}//nilai kembali return (return value)
$nilai1 = 10;
$nilai2 = 15;
echo jumlah($nilai1,$nilai2); // passing parameter
echo "\n";
echo "Fungsi Bawaan";
$sekarang = getdate();
print_r($sekarang); // hasilnya berupa array
echo "\n";
echo "Sekarang Tanggal :".$sekarang["mday"];
?>