<header class="page-header page-header-light bg-white">
    <div class="container col-md-6 col-lg-4">
        <div class="card mt-5">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="container-fluid">
                        <?php if ($pesan == true) {
                            echo $pesan;
                        } elseif ($pesan == true) {
                        } ?>
                        <?= validation_errors() ?>
                        <form action="<?= base_url('pendaftaran/data_pasien') ?>" method="POST">
                            <div class="form-group">
                                <label for="no_rm">Nomor Rekam Medis</label>
                                <input type="number" class="form-control" required id="no_rm" name="rm" placeholder="Nomor Rekam Medis">
                            </div>
                            <div class="form-group">
                                <label for="date">Tanggal Lahir</label>
                                <input type="date" class="form-control" required id="date" name="ttl">
                            </div>
                            <hr>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Cari Pasien</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<section class="bg-light py-10">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h2 class="mb-0">Pendaftaran Antrian Online</h2>
        </div>
    </div>
</section>
<section class="bg-img-cover overlay overlay-light overlay-80 py-15" style='background-image: url("<?= base_url("assets/img/ruangbedah.jpg") ?>"); background-attachment:fixed;'>
    <div class="container z-1">
        <div class="mt-5">
            <div class="display-4 mb-3 text-dark">Siap menjadi klien kami?</div>
            <a class="btn btn-outline-orange btn-marketing " href="#!">Hubungi Kami</a>
        </div>
    </div>
    <!-- <div class="svg-border-angled text-black">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" fill="currentColor">
            <polygon points="0,100 100,0 100,100"></polygon>
        </svg>
    </div> -->
</section>