<div class="container col-8">
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('admin/bidang') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">
                    <?= validation_errors() ?>
                    <form action="<?= base_url('admin/proses_input_bidang')  ?>" method="POST">
                        <div class="form-group">
                            <label for="inputItem">Ruangan</label>
                            <input type="text" class="form-control" id="ruangan" name="ruangan" placeholder="Ruangan">
                        </div>
                        <div class="form-group">
                            <label for="inputItem">Keluhan</label>
                            <input type="text" class="form-control" id="keluhan" name="keluhan" placeholder="Keluhan">
                        </div>
                        <div class="form-group">
                            <label for="inputItem">Tindakan</label>
                            <input type="text" class="form-control" id="tindakan" name="tindakan" placeholder="Tindakan">
                        </div>
                        <div class="form-group">
                            <label for="inputItem">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah">
                        </div>
                        <div class="form-group">
                            <label for="inputItem">Petugas SIMRS</label>
                            <tr>
                                <td>Pilih Waktu</td>
                                <td>
                                    <table>
                                        <td>
                                            <?php foreach ($data_petugas as $petugas) { ?>
                                                <p><input type="checkbox" name="waktu[]" value="<?= $petugas->nama_petugas ?>" /> <?= $petugas->nama_petugas ?></p>
                                            <?php  } ?>
                                        </td>

                                    </table>
                                </td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>