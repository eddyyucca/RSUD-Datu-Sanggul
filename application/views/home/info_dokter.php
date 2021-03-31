<header class="page-header page-header-light bg-white">
    <div class="page-header-content">
        <div class="col-lg mt-4 mb-0">
            <div class="card-header">
                <h2>Info Jadwal Poliklinik</h2>
                <hr>
            </div>
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
    <div class="svg-border-rounded text-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor">
            <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0">
            </path>
        </svg>
    </div>
</header>