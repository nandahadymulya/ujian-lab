<?php
date_default_timezone_set("Asia/Jakarta");
define("BASE_PATH", "/ujian-lab/");

// koneksi ke database
$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'db_labor';

$conn = mysqli_connect($server, $username, $password, $database);

// // Cek apakah berhasil koneksi ke database
// if (mysqli_connect_errno()) {
// 	echo "
//         <div class='alert alert-danger'>
//           Your application has Failed to connected to the Database
//         </div>
//     " . mysqli_connect_error();
// 	exit();
// } else {
// 	echo "
//         <div class='alert alert-success text-center'>
//           Your application has <span class='fw-bold'>Successfully</span> connected to the <span class='fw-bold'>Database</span>!
//         </div>
//       ";
// }

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

// Logika Pelanggan
function tambahPelanggan($data)
{
	global $conn;

	$kd_pelanggan = htmlspecialchars($data["kd_pelanggan"]);
	$nama_pelanggan = htmlspecialchars($data["nama_pelanggan"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$kota = htmlspecialchars($data["kota"]);

	$query = "INSERT INTO pelanggan
				VALUES
			  ('$kd_pelanggan', '$nama_pelanggan', '$alamat', '$kota')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapusPelanggan($kd_pelanggan)
{
	global $conn;

	mysqli_query($conn, "DELETE FROM pelanggan WHERE kd_pelanggan = $kd_pelanggan");
	return mysqli_affected_rows($conn);
}


function ubahPelanggan($data)
{
	global $conn;

	$kd_pelanggan = htmlspecialchars($data["kd_pelanggan"]);
	$nama_pelanggan = htmlspecialchars($data["nama_pelanggan"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$kota = htmlspecialchars($data["kota"]);

	$query = "UPDATE pelanggan SET
				kd_pelanggan = '$kd_pelanggan',
				nama_pelanggan = '$nama_pelanggan',
				alamat = '$alamat',
				kota = '$kota'
			  WHERE kd_pelanggan = $kd_pelanggan
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}



// Logika Kendaraan
function tambahKendaraan($data)
{
	global $conn;

	$kd_kendaraan = htmlspecialchars($data["kd_kendaraan"]);
	$merk = htmlspecialchars($data["merk"]);
	$harga_otr = htmlspecialchars($data["harga_otr"]);
	$stok = htmlspecialchars($data["stok"]);

	$query = "INSERT INTO kendaraan
				VALUES
			  ('$kd_kendaraan', '$merk', '$harga_otr', '$stok')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapusKendaraan($kd_kendaraan)
{
	global $conn;

	mysqli_query($conn, "DELETE FROM kendaraan WHERE kd_kendaraan = $kd_kendaraan");
	return mysqli_affected_rows($conn);
}




// Logika Transaksi
function tambahTransaksi($data)
{
	global $conn;

	$no_faktur = htmlspecialchars($data["no_faktur"]);
	$tgl_faktur = htmlspecialchars($data["tgl_faktur"]);
	$kd_pelanggan = htmlspecialchars($data["kd_pelanggan"]);
	$kd_kendaraan = htmlspecialchars($data["kd_kendaraan"]);
	$j_transaksi = htmlspecialchars($data["j_transaksi"]);
	$j_bayar = htmlspecialchars($data["j_bayar"]);

	$query = "INSERT INTO transaksi
				VALUES
			  ('$no_faktur', '$tgl_faktur', '$kd_pelanggan', '$kd_kendaraan', '$j_transaksi' , '$j_bayar')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}




// function cari($keyword)
// {
// 	$query = "SELECT * FROM mahasiswa
// 				WHERE
// 			  nama LIKE '%$keyword%' OR
// 			  nrp LIKE '%$keyword%' OR
// 			  email LIKE '%$keyword%' OR
// 			  jurusan LIKE '%$keyword%'
// 			";
// 	return query($query);
// }


function registrasi($data)
{
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
		return false;
	}


	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($conn);
}
