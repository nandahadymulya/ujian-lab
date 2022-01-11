<?php

// ambil data di URL
$kd_pelanggan = $_GET['kd_pelanggan'];

// query data pelanggan berdasarkan kd_pelanggan
$datapelanggan = query("SELECT * FROM pelanggan WHERE kd_pelanggan = $kd_pelanggan");


// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubahPelanggan($_POST) > 0) {
        echo "
			<script>
				alert('Data Pelanggan Berhasil Diubah!');
				document.location.href = '?page=pelanggan';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Data Pelanggan Gagal Diubah!');
				document.location.href = '?page=pelanggan';
			</script>
		";
    }
}
?>
<main>
    <div class="container">
        <div class="card shadow p-3 mb-5 bg-body rounded">
            <h2 class="text-center mt-4">Ubah Data Pelanggan</h2>
            <div class="row m-5">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-md-8">
                        <div class="card border-0">
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="kd_pelanggan">Kode Pelanggan</label>
                                        <input type="text" name="kd_pelanggan" id="kd_pelanggan" class="form-control" value="<?= $datapelanggan["kd_pelanggan"]; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_pelanggan">Nama Pelanggan</label>
                                        <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" value="<?= $datapelanggan["nama_pelanggan"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $datapelanggan["alamat"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="kota">Kota</label>
                                        <input type="text" name="kota" id="kota" class="form-control" value="<?= $datapelanggan["kota"]; ?>">
                                    </div>
                                    <br>
                                    <a href="?page=pelanggan" class="btn btn-secondary">Kembali</a>
                                    <button type="submit" name="submit" class="btn btn-success float-sm-end">Ubah Data!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>