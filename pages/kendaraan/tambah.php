<?php

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (tambahKendaraan($_POST) > 0) {
        echo "
			<script>
				alert('Data Kendaraan Baru Berhasil Ditambahkan!');
				document.location.href = '?page=kendaraan';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Data Kendaraan Baru Gagal Ditambahkan!');
				document.location.href = '?page=kendaraan';
			</script>
		";
    }
}
?>
<main>
    <div class="container">
        <div class="card shadow p-4 mb-5 bg-body rounded">
            <h2 class="text-center">Tambah Data Kendaraan Baru</h2>
            <div class="row p-4">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-md-8">
                        <div class="card border-0">
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group mb-3">
                                        <label for="kd_kendaraan">Kode Kendaraan</label>
                                        <input type="text" name="kd_kendaraan" id="kd_kendaraan" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="merk">Merk/Type Kendaraan</label>
                                        <input type="text" name="merk" id="merk" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="harga_otr">Harga OTR</label>
                                        <input type="text" name="harga_otr" id="harga_otr" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="stok">Stok</label>
                                        <input type="text" name="stok" id="stok" class="form-control">
                                    </div>

                                    <br>
                                    <a href="?page=kendaraan" class="btn btn-secondary">Kembali</a>
                                    <button type="submit" name="submit" class="btn btn-success float-sm-end">Tambahkan Kendaraan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>