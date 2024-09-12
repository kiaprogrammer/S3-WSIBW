<?php // Muhammad Aulia Azkia Rahman
// Kasus 1: Penerimaan Barang
function terimaBarang($barang) {
    if ($barang['sesuaiPesanan'] && $barang['kondisiBaik']) {
        echo "Barang diterima."."\n";
        return true;
    } else {
        echo "Barang ditolak. Laporan dikirim ke pemasok."."\n";
        return false;
    }
}
?>

<?php 
// Kasus 2: Penyimpanan Barang
function simpanBarang($barang) {
    if ($barang['mudahRusak']) {
        echo "Simpan di area terkontrol suhu."."\n";
    } elseif ($barang['ukuranBesar']) {
        echo "Simpan di area penyimpanan barang besar."."\n";
    } elseif ($barang['penangananKhusus']) {
        echo "Simpan di area khusus."."\n";
    } else {
        echo "Simpan di area umum."."\n";
    }
}
?>

<?php
// Kasus 3: Pemesanan Ulang Barang
function cekStok($barang) {
    if ($barang['jumlahStok'] < $barang['batasMinimum']) {
        echo "Pesan ulang barang."."\n";
        buatPesananUlang($barang);
    } else {
        echo "Stok mencukupi."."\n";
    }
}

function buatPesananUlang($barang) {
    // Implementasi pemesanan ulang
    echo "Pesanan ulang dibuat untuk barang: " . $barang['nama']."\n";
}
?>

<?php
// Kasus 4: Pemrosesan Pesanan Pelanggan
function prosesPesanan($pesanan, $stokBarang) {
    if ($stokBarang[$pesanan['barangId']]['jumlahStok'] >= $pesanan['jumlah']) {
        echo "Pesanan diproses."."\n";
        kirimBarang($pesanan);
    } else {
        echo "Stok tidak mencukupi. Permintaan pemesanan ulang dibuat."."\n";
        cekStok($stokBarang[$pesanan['barangId']]);
        informasikanPelanggan($pesanan['pelangganId']);
    }
}

function informasikanPelanggan($pelangganId) {
    // Implementasi informasi pelanggan
    echo "Estimasi waktu pengiriman dikirim ke pelanggan: " . $pelangganId."\n";
}
?>

<?php
// Kasus 5: Pengiriman Barang
function kirimBarang($pesanan) {
    if ($pesanan['pengiriman'] == 'ekspres' && $pesanan['stokTersedia']) {
        echo "Kirim dengan layanan ekspres."."\n";
    } elseif ($pesanan['pengiriman'] == 'reguler') {
        echo "Kirim dengan pengiriman reguler."."\n";
    } elseif ($pesanan['penangananKhusus']) {
        echo "Kirim dengan layanan pengiriman khusus."."\n";
    } else {
        echo "Metode pengiriman tidak valid."."\n";
    }
}
?>

<?php // Operasi Sederhana Inventarisasi Barang
$barang = [
    'nama' => 'Widget A',
    'sesuaiPesanan' => true,
    'kondisiBaik' => true,
    'mudahRusak' => false,
    'ukuranBesar' => false,
    'penangananKhusus' => false,
    'jumlahStok' => 10,
    'batasMinimum' => 5,
];

$pesanan = [
    'barangId' => 3,
    'jumlah' => 3,
    'pengiriman' => 'reguler',
    'pelangganId' => 'P001',
    'stokTersedia' => true,
    'penangananKhusus' => false,
];

$stokBarang = [
    3 => [
        'jumlahStok' => 4,
        'nama' => 'Widget A',
        'batasMinimum' => 5,
    ],
];

if (terimaBarang($barang)) {
    simpanBarang($barang);
    cekStok($barang);
}

prosesPesanan($pesanan, $stokBarang);
?>