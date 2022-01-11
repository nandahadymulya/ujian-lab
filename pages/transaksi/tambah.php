<?php

$pelanggan = query("SELECT * FROM pelanggan");
$kendaraan = query("SELECT * FROM kendaraan");

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (tambahTransaksi($_POST) > 0) {
        echo "
			<script>
				alert('Data Transaksi Baru Berhasil Ditambahkan!');
				document.location.href = '?page=transaksi';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Data Transaksi Baru Gagal Ditambahkan!');
				document.location.href = '?page=transaksi';
			</script>
		";
    }
}
?>
<main>
    <div class="container">
        <div class="card shadow p-4 mb-5 bg-body rounded">
            <h2 class="text-center">Tambah Data Transaksi Baru</h2>
            <div class="row p-4">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-md-8">
                        <div class="card border-0">
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group mb-3">
                                        <label for="no_faktur">Nomor Faktur</label>
                                        <input type="text" name="no_faktur" id="no_faktur" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="tgl_faktur">Tanggal Faktur</label>
                                        <input type="date" name="tgl_faktur" id="tgl_faktur" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="kd_pelanggan">Kode Pelanggan</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Pelanggan</option>
                                            <?php foreach ($pelanggan as $row) : ?>
                                                <option value="<?= $row['kd_pelanggan']; ?>"><?= $row['kd_pelanggan']; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="kd_kendaraan">Kode Pelanggan</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Kendaraan</option>
                                            <?php foreach ($kendaraan as $row) : ?>
                                                <option value="<?= $row['kd_kendaraan']; ?>"><?= $row['kd_kendaraan']; ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="j_transaksi">Jumlah Transaksi</label>
                                        <input type="text" name="j_transaksi" id="j_transaksi" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="j_bayar">Jumlah Bayar</label>
                                        <input type="text" name="j_bayar" id="j_bayar" class="form-control">
                                    </div>
                                    <br>
                                    <a href="?page=transaksi" class="btn btn-secondary">Kembali</a>
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