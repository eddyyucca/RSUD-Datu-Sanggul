<header class="page-header page-header-light bg-white">
    <div class="page-header-content">
        <div class="container">
            <div class="col-lg mb-0">
                <a class="card post-preview post-preview-featured lift mb-5" href="#!">
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <div class="post-preview-featured-img" style='background-image: url("<?= base_url("assets/foto_berita/") . $kepala_berita->foto_berita ?>")'></div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card-body">
                                <div class="py-5">
                                    <h5 class="card-title"><?= $kepala_berita->judul_berita ?></h5>
                                    <p class="card-text"><?= $kepala_berita->isi_berita ?></p>
                                </div>
                                <hr />
                                <div class="post-preview-meta">
                                    <div class="post-preview-meta-details">
                                        <div class="post-preview-meta-details-date"><?= $kepala_berita->date_berita ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="row">
                    <?php foreach ($data_berita as $berita) { ?>
                        <div class="col-md-6 col-xl-4 mb-5">
                            <a class="card post-preview lift h-100" href="<?= base_url('lihat_berita/') . $berita->url ?>"><img class="card-img-top" src="<?= base_url('assets/foto_berita/' . $berita->foto_berita) ?>" alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title"><?= $berita->judul_berita ?></h5>
                                </div>
                                <div class="card-footer">
                                    <div class="post-preview-meta">
                                        <div class="post-preview-meta-details">
                                            <div class="post-preview-meta-details-date"><?= $berita->date_berita ?></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-blog justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">«</span></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                        <li class="page-item"><a class="page-link" href="#!">12</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">»</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>