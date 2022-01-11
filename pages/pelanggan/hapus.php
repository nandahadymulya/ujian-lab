<?php

// ambil data di URL
$kd_pelanggan = $_GET['kd_pelanggan'];

if (hapusPelanggan($kd_pelanggan) > 0) {
	echo "
		<script>
			alert('Data Pelanggan Berhasil Dihapus!');
			document.location.href = '?page=pelanggan';
		</script>
	";
} else {
	echo "
		<script>
			alert('Data Pelanggan Gagal Dihapus!');
			document.location.href = '?page=pelanggan';
		</script>
	";
}
