<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">Data Akun Login</h6>
        </div>
        <div class="card-body">
            <div class="container">
                <a class="btn btn-primary" href="<?= base_url('admin/tambah_akun') ?>">Akun Baru</a>
                <a class="btn btn-danger disabled" href="<?= base_url('hr/laporan_pdf') ?>">Print PDF</a>
                <a class="btn btn-success disabled" href="<?= base_url('hr/laporan_excel') ?>">Print Excel</a>
                <hr>
                <?= $this->session->flashdata('tambah_karyawan'); ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($data as $x) { ?>
                                    <td align="center"><?= $no++ ?></td>
                                    <td><?= $x->username ?></td>
                                    <td><?= $x->level ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/reset_pass/') . $x->id_login; ?>" class="btn btn-secondary">Reset</i></a>
                                        <a href="<?= base_url('admin/edit_akun/') . $x->id_login; ?>" class="btn btn-secondary">Ubah</i></a>
                                    </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>