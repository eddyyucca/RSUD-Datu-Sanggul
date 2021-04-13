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
                        } elseif ($pesan == false) {
                        } ?>
                        <?= validation_errors() ?>
                        <form action="<?= base_url('pendaftaran/data_pasien') ?>" method="POST">
                            <div class="form-group">
                                <label for="no_rm">Nomor Rekam Medis</label>
                                <input type="number" class="form-control" required id="no_rm" name="rm" placeholder="Nomor Rekam Medis">
                            </div>
                            <div class="form-group">
                                <label for="date">Tanggal Lahir</label>
                                <input type="date" class="form-control" required name="ttl">
                            </div>
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