<div class="container col-6">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('dokter') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <form action="<?= base_url('dokter/tambah_dokter/' . $id_tgl) ?>" method="POST">
                        <table class="table">
                            <tr>
                                <input type="hidden" name="id_tgl_dokter" value="<?= $id_tgl ?>">
                                <td width=20%>Waktu Masuk</td>
                                <td>
                                    <input type="time" name="waktu_masuk" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Waktu Pulang</td>
                                <td>
                                    <input type="time" name="waktu_keluar" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td width=20%>Dokter</td>
                                <td>
                                    <select class="form-control" name="id_dokter">
                                        <option value="">-- PILIH DOKTER --</option>
                                        <?php foreach ($dokter as $dkt) { ?>
                                            <option value="<?= $dkt->kd_dokter ?>"><?= $dkt->nm_dokter ?></option>
                                        <?php   } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Pilih Waktu</td>
                                <td>
                                    <p>Pilih Hari :</p>
                                    <table>
                                        <td>
                                            <p><input type="checkbox" name="waktu[]" value="Senin" /> Senin</p>
                                            <p><input type="checkbox" name="waktu[]" value="Selasa" /> Selasa</p>
                                            <p><input type="checkbox" name="waktu[]" value="Rabu" /> Rabu</p>
                                            <p><input type="checkbox" name="waktu[]" value="Kamis" /> Kamis</p>
                                        </td>
                                        <td>
                                            <p><input type="checkbox" name="waktu[]" value="Jum'at" /> Jum'at</p>
                                            <p><input type="checkbox" name="waktu[]" value="Sabtu" /> Sabtu</p>
                                            <p><input type="checkbox" name="waktu[]" value="Minggu" /> Minggu</p>
                                        </td>
                                    </table>
                                </td>
                            </tr>
                            <td>
                                <button class="btn btn-primary">Simpan</button>
                            </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>