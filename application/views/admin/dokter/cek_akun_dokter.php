<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Berita</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="3px" align="center">No</th>
                            <th>Nama Dokter</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($dokter as $x) {
                            foreach ($akun_dokter as $x2) {
                                if ($x->kd_dokter == $x2->kode_dokter) { ?>
                                <?php } else { ?>
                                    <tr>
                                        <td align="center"><?= $nomor++; ?></td>
                                        <td><?= $x->nm_dokter; ?></td>
                                        <td align="center">
                                            <a href="<?= base_url('admin/buat_akun_dokter/') . $x->kd_dokter; ?>" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Buat Akun</a>
                                        </td>
                                        <?php break; ?>
                                    </tr>
                        <?php
                                }
                            }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>