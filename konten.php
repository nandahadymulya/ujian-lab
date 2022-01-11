<?php

$nama = 'Dinda Dwi Ulfahtunnisa';
$nobp = '18101152610635';


// Logic Beranda
if ($page == '') {
    $page = 'beranda';
    include "pages/beranda/beranda.php";
}

// Logic Pelanggan
else if ($page == 'pelanggan') {
    include "pages/pelanggan/pelanggan.php";
} else if ($page == 'pelanggan/tambah') {
    include "pages/pelanggan/tambah.php";
} else if ($page == 'pelanggan/hapus') {
    include "pages/pelanggan/hapus.php";
} else if ($page == 'pelanggan/ubah') {
    include "pages/pelanggan/ubah.php";
}


// Logic Kendaraan
else if ($page == 'kendaraan') {
    include "pages/kendaraan/kendaraan.php";
} else if ($page == 'kendaraan/tambah') {
    include "pages/kendaraan/tambah.php";
} else if ($page == 'kendaraan/hapus') {
    include "pages/kendaraan/hapus.php";
} else if ($page == 'kendaraan/ubah') {
    include "pages/kendaraan/ubah.php";
}


// Logic Transaksi
else if ($page == 'transaksi') {
    include "pages/transaksi/transaksi.php";
} else if ($page == 'transaksi/tambah') {
    include "pages/transaksi/tambah.php";
} else if ($page == 'tansaksi/hapus') {
    include "pages/transaksi/hapus.php";
} else if ($page == 'transaksi/ubah') {
    include "pages/transaksi/ubah.php";
}
