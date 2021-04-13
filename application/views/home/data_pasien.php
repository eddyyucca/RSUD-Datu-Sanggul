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
                            </table>
                            <hr>
                            <form action="<?= base_url('pendaftaran/daftar') ?>" method="POST">
                                <input type="hidden" name="rm" value="<?= $data_pasien->no_rkm_medis ?>">
                                <input type="hidden" name="poli" value="<?= $poli ?>">

                                <div class="form-group date">
                                    <label for="date">Tanggal Berobat</label>
                                    <div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                        <input class="form-control" size="16" name="tgl_berobat" type="text" value="--TANGGAL BEROBAT--">

                                    </div>
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
                            <div class="text-center">
                                <div class='alert alert-danger' role='alert'>
                                    <h1>Data Tidak Ditemukan !</h1>
                                </div>
                                <a href="<?= base_url('pendaftaran') ?>" class="btn btn-success">Kembali Lakukan Pendaftaran</a>
                            </div>

                    </div>

                <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>