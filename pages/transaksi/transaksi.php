<?php

$transaksi = query("SELECT * FROM transaksi");

?>
<main>
    <div class="container">
        <div class="card shadow p-3 mb-5 bg-body rounded">
            <h2 class="text-center mt-3">Data Transaksi</h2>
            <div class="row">
                <div class="">
                    <a href="?page=transaksi/tambah" class="btn btn-success">Tambah Data Transaksi</a>
                </div>
                <div class="">
                    <form class="row g-2 mt-2 mb-3" action="" method="post">
                        <div class="col-md">
                            <label for="keyword" class="visually-hidden">keyword</label>
                            <input type="text" class="form-control" name="keyword" id="keyword" autofocus placeholder="Masukkan keyword pencarian..">
                        </div>
                        <div class="col-md">
                            <button type=" submit" class="btn btn-primary">Cari!</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-3">

                <div class="col-md">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Aksi</th>
                                <th scope="col">No. Faktur</th>
                                <th scope="col">Tanggal Faktur</th>
                                <th scope="col">Kode Pelanggan</th>
                                <th scope="col">Kode Kendaraan</th>
                                <th scope="col">Jumlah Transaksi</th>
                                <th scope="col">Jumlah Bayar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($transaksi as $row) : ?>
                                <tr scope="row">
                                    <td><?= $i; ?></td>
                                    <td>
                                        <a href="?page=transaksi/ubah&kd=<?= $row["kd_transaksi"]; ?>">
                                            <span class="badge bg-primary">Ubah</span>
                                        </a>
                                        <a href="?page=transaksi/hapus&kd'=<?= $row['kd_transaksi']; ?>" onclick="return confirm('yakin?');">
                                            <span class="badge bg-danger">Hapus</span>
                                        </a>
                                    </td>
                                    <td><?= $row["no_faktur"]; ?></td>
                                    <td><?= $row["tgl_faktur"]; ?></td>
                                    <td><?= $row["kd_pelanggan"]; ?></td>
                                    <td><?= $row["kd_kendaraan"]; ?></td>
                                    <td><?= $row["j_transaksi"]; ?></td>
                                    <td>Rp <?= $row["j_bayar"]; ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>