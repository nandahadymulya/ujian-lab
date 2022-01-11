<?php
$kendaraan = query("SELECT * FROM kendaraan");
?>
<main>
    <div class="container">
        <div class="card shadow p-3 mb-5 bg-body rounded">
            <h2 class="text-center mt-3">Data Kendaraan</h2>
            <div class="row">
                <div class="">
                    <a href="?page=kendaraan/tambah" class="btn btn-success">Tambah Data Kendaraan</a>
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
                                <th scope="col">Kode kendaraan</th>
                                <th scope="col">Merk</th>
                                <th scope="col">Harga OTR</th>
                                <th scope="col">Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kendaraan as $row) : ?>
                                <tr scope="row">
                                    <td><?= $i; ?></td>
                                    <td>
                                        <a href="?page=kendaraan/ubah&kd=<?= $row["kd_kendaraan"]; ?>">
                                            <span class="badge bg-primary">Ubah</span>
                                        </a>
                                        <a href="?page=kendaraan/hapus&kd'=<?= $row['kd_kendaraan']; ?>" onclick="return confirm('yakin?');">
                                            <span class="badge bg-danger">Hapus</span>
                                        </a>
                                    </td>
                                    <td><?= $row["kd_kendaraan"]; ?></td>
                                    <td><?= $row["merk"]; ?></td>
                                    <td><?= $row["harga_otr"]; ?></td>
                                    <td><?= $row["stok"]; ?></td>
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