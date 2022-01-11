<?php

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

  $kd_pelanggan = htmlspecialchars($data['kd_pelanggan']);
  $nama_pelanggan = htmlspecialchars($data['nama_pelanggan']);
  $alamat = htmlspecialchars($data['alamat']);
  $kota = htmlspecialchars($data['kota']);

  $query = "UPDATE pelanggan SET
				nama_pelanggan = '$nama_pelanggan',
				alamat = '$alamat',
				kota = '$kota'
			  WHERE kd_pelanggan = $kd_pelanggan
			";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
