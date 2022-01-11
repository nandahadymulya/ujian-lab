<?php

$pelanggan = query("SELECT * FROM pelanggan");

?>
<main>
    <div class="container">
        <div class="card shadow p-3 mb-5 bg-body rounded">
            <h2 class="text-center mt-3">Data Pelanggan</h2>
            <div class="row">
                <div class="">
                    <a href="?page=pelanggan/tambah" class="btn btn-success">Tambah Data Pelanggan</a>
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
                                <th scope="col">Kode Pelanggan</th>
                                <th scope="col">Nama Pelanggan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kota</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($pelanggan as $row) : ?>
                                <tr scope="row">
                                    <td><?= $i; ?></td>
                                    <td>
                                        <a href="?page=pelanggan/ubah&?kd_pelanggan=<?= $row['kd_pelanggan']; ?>">
                                            <span class="badge bg-primary">Ubah</span>
                                        </a>
                                        <a href="?page=pelanggan/hapus&?kd_pelanggan=<?= $row['kd_pelanggan']; ?>" onclick="return confirm('yakin?');">
                                            <span class="badge bg-danger">Hapus</span>
                                        </a>
                                    </td>
                                    <td><?= $row["kd_pelanggan"]; ?></td>
                                    <td><?= $row["nama_pelanggan"]; ?></td>
                                    <td><?= $row["alamat"]; ?></td>
                                    <td><?= $row["kota"]; ?></td>
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