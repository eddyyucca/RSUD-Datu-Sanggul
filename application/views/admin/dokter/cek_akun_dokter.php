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
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name Dokter</th>
                                <th>Jadwal</th>
                                <th>Jam Kerja</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($data as $x) { ?>
                                <tr>
                                    <td><?= $x->nm_dokter ?></td>
                                    <td>Senin-Minggu</td>
                                    <td>08:00 - 18:00</td>
                                </tr>
                        </tbody>
                    <?php   } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>