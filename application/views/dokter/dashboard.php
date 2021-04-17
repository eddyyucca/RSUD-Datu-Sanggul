<div class="container-fluid">
    <div class="container">
        <div class="card">
            <div class="card-header">Info Jadwal Dokter</div>
            <div class="card-body">
                <div class="row">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="3px" align="center">No</th>
                                        <!-- <th width="auto">Tanggal</th> -->
                                        <th>Poli</th>
                                        <th>Jadwal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    get_instance()->load->helper('tgl_indo');
                                    $nomor = 1;
                                    foreach ($data as $x) { ?>
                                        <tr>
                                            <td align="center"><?= $nomor++; ?></td>
                                            <!-- <td width="auto"><?= longdate_indo($x->tanggal_awal)  . " / " . longdate_indo($x->tanggal_akhir); ?></td> -->
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
                                                                    <td> <?php $kata = strlen($hari->hari);
                                                                            $jumlah = $kata - 1;
                                                                            echo substr($hari->hari, 0, $jumlah);
                                                                            ?></td>
                                                                    <td> <?= $hari->nm_dokter ?></td>
                                                            <?php }
                                                        } ?>
                                                                </tr>
                                                    </tbody>
                                                </table>
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
    </div>
</div>