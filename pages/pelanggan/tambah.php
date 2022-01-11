<?php

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (tambahPelanggan($_POST) > 0) {
        echo "
			<script>
				alert('Data Pelanggan Baru Berhasil Ditambahkan!');
				document.location.href = '?page=pelanggan';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Data Pelanggan Baru Gagal Ditambahkan!');
				document.location.href = '?page=pelanggan';
			</script>
		";
    }
}
?>
<main>
    <div class="container">
        <div class="card shadow p-4 mb-5 bg-body rounded">
            <h2 class="text-center">Tambah Data Pelanggan Baru</h2>
            <div class="row p-4">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-md-8">
                        <div class="card border-0">
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group mb-3">
                                        <label for="kd_pelanggan">Kode Pelanggan</label>
                                        <input type="text" name="kd_pelanggan" id="kd_pelanggan" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="nama_pelanggan">Nama Pelanggan</label>
                                        <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" name="alamat" id="alamat" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="kota">Kota</label>
                                        <input type="text" name="kota" id="kota" class="form-control">
                                    </div>
                                    <br>
                                    <a href="?page=pelanggan" class="btn btn-secondary">Kembali</a>
                                    <button type="submit" name="submit" class="btn btn-success float-sm-end">Tambahkan Pelanggan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>