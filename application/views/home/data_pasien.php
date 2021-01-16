<header class="page-header page-header-light bg-white">
    <div class="container col-md-6 col-lg-4">
        <div class="card mt-5">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="container-fluid">
                        <?= validation_errors() ?>
                        <?php if ($data_pasien == true) {         ?>
                            <table border="0">
                                <tr>
                                    <td>Nama Pasien</td>
                                    <td>:</td>
                                    <td><?= $data_pasien->nm_pasien ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td><?= $data_pasien->tgl_lahir ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><?= $data_pasien->alamat ?></td>
                                </tr>
                            </table>
                            <hr>
                            <form action="<?= base_url('pendaftaran/daftar') ?>" method="POST">
                                <input type="hidden" name="rm" value="<?= $data_pasien->no_rkm_medis ?>">
                                <input type="hidden" name="poli" value="<?= $poli ?>">
                                <div class="form-group">
                                    <label for="date">Tanggal Berobat</label>
                                    <input type="date" class="form-control" id="date" name="tgl_berobat">
                                </div>
                                <div class="form-group">
                                    <label for="date">Poliklinik</label>
                                    <select class="form-control" name="poli" id="">
                                        <option value="">-- PILIH POLI --</option>
                                        <?php foreach ($poliklinik as $poli) { ?>
                                            <option value="<?= $poli->nm_poli ?>"><?= $poli->nm_poli ?></option>
                                        <?php   } ?>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-success">Daftar Antrian</button>
                                </div>
                            </form>
                        <?php  } elseif ($data_pasien == false) { ?>
                            <h1>Data Tidak Ditemukan</h1>
                        <?php } ?>
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