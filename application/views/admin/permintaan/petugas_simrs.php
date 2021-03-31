<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Petugas SIMRS</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <a href="<?= base_url('admin/tambah_petugas') ?>" class="btn btn-success">Tambah Petugas</a>
                    <hr>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="3px" align="center">No</th>
                            <th>Nama Petugas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data as $x) { ?>
                            <tr>
                                <td align="center"><?= $nomor++; ?></td>
                                <td><?= $x->nama_petugas; ?></td>
                                <td align="center">
                                    <a href="<?= base_url('admin/edit_petugas/') . $x->id_petugas_simrs; ?>" class="btn btn-primary"><i class="far fa-edit"></i> Edit</a>
                                    <a href="<?= base_url('admin/hapus_petugas/') . $x->id_petugas_simrs; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"><i class="far fa-trash-alt"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>