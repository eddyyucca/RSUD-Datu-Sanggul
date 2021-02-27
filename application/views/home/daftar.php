<header class="page-header page-header-light bg-white">
    <div class="container col-md-6 col-lg-4">
        <div class="card mt-5">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="container-fluid">
                        <?php if ($data_pasien == false) { ?>
                            <h1>Data Tidak Ditemukan</h1>
                        <?php   } elseif ($data_pasien == true) { ?>
                            <table border="0">
                                <tr>
                                    <td>Nama Pasien</td>
                                    <td>:</td>
                                    <td><?= $data_pasien->nm_pasien ?></td>
                                </tr>
                                <tr>
                                    <td>No Rekam Medis</td>
                                    <td>:</td>
                                    <td><?= $data_pasien->no_rkm_medis ?></td>
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
                                <tr>
                                    <td>Tanggal daftar</td>
                                    <td>:</td>
                                    <td><?= $tgl_berobat ?></td>
                                </tr>
                                <tr>
                                    <td>Poliklinik Tujuan</td>
                                    <td>:</td>
                                    <td><?= $poli ?></td>
                                </tr>
                                <tr>
                                    <td>No Antrian</td>
                                    <td>:</td>
                                    <td><?= $noantri ?></td>
                                </tr>
                            </table>
                            <hr>
                            <div class="text-center">
                                <form action="<?= base_url('pendaftaran/cetak_antrian') ?>" method="post">
                                    <input type="hidden" name="no_rm" value="<?= $data_pasien->no_rkm_medis ?>">
                                    <input type="hidden" name="tgl_berobat" value="<?= $tgl_berobat ?>">
                                    <input type="hidden" name="poli_tujuan" value="<?= $poli ?>">
                                    <input type="hidden" name="no_antrian" value="<?= $noantri ?>">
                                    <button class="btn btn-success">Cetak Antrian</button>
                                </form>
                            </div>
                        <?php    } ?>
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
</section>