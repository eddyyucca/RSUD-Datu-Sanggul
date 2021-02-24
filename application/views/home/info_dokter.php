<header class="page-header page-header-light bg-white">
    <div class="page-header-content">
        <div class="container">
            <div class="col-lg mt-4 mb-0">

                <div class="card-header">Info Dokter</div>
                <div class="card-body">
                    <div class="datatable">
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
        <div class="svg-border-rounded text-light">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor">
                <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0">
                </path>
            </svg>
        </div>

</header>



<section class="bg-img-cover overlay overlay-light overlay-80 py-15" style='background-image: url("<?= base_url("assets/img/ruangbedah.jpg") ?>"); background-attachment:fixed;'>
    <div class="container z-1">
        <div class="mt-5">
            <div class="display-4 mb-3 text-dark">Siap menjadi klien kami?</div>
            <a class="btn btn-outline-orange btn-marketing " href="#!">Hubungi Kami</a>
        </div>
    </div>
</section>