<?php

// ambil data di URL
$kd_kendaraan = $_GET['kd_kendaraan'];

if (hapusKendaraan($kd_kendaraan) > 0) {
    echo "
		<script>
			alert('Data Kendaraan Berhasil Dihapus!');
			document.location.href = '?page=kendaraan';
		</script>
	";
} else {
    echo "
		<script>
			alert('Data Kendaraan Gagal Dihapus!');
			document.location.href = '?page=kendaraan';
		</script>
	";
}
