<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Jadwal Dokter</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <a href="<?= base_url('dokter/tanggal_dokter') ?>" class="btn btn-success">Tambah Jadwal Dokter</a>
                    <a href="<?= base_url('dokter/tanggal_dokter') ?>" class="btn btn-primary">Cetak</a>
                    <hr>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="3px" align="center">No</th>
                            <th>Tanggal</th>
                            <th>Poli</th>
                            <th>Jadwal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td align="center"><?= $nomor++; ?></td>
                                <td><?= $x->tanggal_awal . " / " . $x->tanggal_akhir; ?></td>
                                <td><?= $x->poli ?></td>
                                <td>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Hari</th>
                                                <th>Dokter</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach ($hari_dokter as $hari) {
                                                if ($x->id_tgl_dokter == $hari->id_tgl_dokter) { ?>
                                                    <tr>
                                                        <td> <?= $hari->hari ?></td>
                                                        <td> <?= $hari->nm_dokter ?>
                                                            <a href="<?= base_url('dokter/edit_dokter/') . $hari->id_jadwal_dokter; ?>">
                                                                <i class="far fa-edit"></i> </a>|
                                                            <a style="color:red" href="<?= base_url('dokter/edit_dokter/') . $hari->id_jadwal_dokter; ?>" onclick="return confirm('Yakin Hapus?')"><i class="fas fa-user-minus"></i></a>
                                                            </a>
                                                        </td>
                                                <?php }
                                            } ?>
                                                    </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td align="center">
                                    <a href="<?= base_url('dokter/tambah_dokter/') . $x->id_tgl_dokter; ?>" class="btn btn-primary"><i class="fas fa-user-edit"></i>Tambah Dokter</a>
                                    <a href="<?= base_url('dokter/edit/') . $x->id_tgl_dokter; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"><i class="far fa-edit"></i> Ubah</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>