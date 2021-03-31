<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Tabel Berita</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="container">
                    <a href="<?= base_url('user/post') ?>" class="btn btn-success">Tambah Berita Baru</a>
                    <hr>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="3px" align="center">No</th>
                            <th>Judul</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($data_berita as $x) { ?>
                            <tr>
                                <td align="center"><?= $nomor++; ?></td>
                                <td><?= $x->judul_berita; ?></td>
                                <td align="center">
                                    <a href="<?= base_url('admin/edit_bidang/') . $x->id_berita; ?>" class="btn btn-primary"><i class="far fa-edit"></i> Edit</a>
                                    <a href="<?= base_url('admin/hapus_bidang/') . $x->id_berita; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"><i class="far fa-trash-alt"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>