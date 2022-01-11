<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="./">Program Ujian Labor</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class=" nav-item"><a class="nav-link <?php if ($page == 'pelanggan') echo 'active'; ?>" aria-current="page" href="?page=pelanggan">Data Pelanggan</a></li>
                <li class="nav-item"><a class="nav-link <?php if ($page == 'kendaraan') echo 'active'; ?>" aria-current="page" href="?page=kendaraan">Data Kendaraan</a></li>
                <li class="nav-item"><a class="nav-link <?php if ($page == 'transaksi') echo 'active'; ?>" aria-current="page" href="?page=transaksi">Data Transaksi</a></li>
            </ul>
        </div>
    </div>
</nav>