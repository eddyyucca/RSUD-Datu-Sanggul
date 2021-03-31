<div class="container-fluid">
    <div class="container">
        <div class="card">
            <div class="card-header">Profil Dokter</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">Foto Profile</div>
                            <div class="card-body text-center">
                                <div class="d-flex justify-content-center">
                                    <img class="img-account-profile img-fluid border mb-2" src="<?= base_url('assets/img/profil.png') ?>" id="blah" alt="Images" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-header">Profile Dokter</div>
                            <div class="card-body text-left">
                                <div class="d-flex justify-content-left">
                                    <table class="mt-2 ml-3">
                                        <tr>
                                            <td> Nama Dokter</td>
                                            <td> : <?= $data->nm_dokter  ?> </td>
                                        </tr>
                                        <tr>
                                            <td> Tempat/tanggal/lahir</td>
                                            <td> : <?= $data->tgl_lahir . " " . $data->tgl_lahir  ?> </td>
                                        </tr>
                                        <tr>
                                            <td> Agama</td>
                                            <td>: <?= $data->agama  ?> </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>