<div class="container-fluid">
    <div class="row">
        <?php foreach ($data_berita as $berita) { ?>
            <div class="col-md-6 col-xl-4 mb-5">
                <a class="card post-preview lift h-100" href="<?= base_url('lihat_berita/') . $berita->url ?>"><img class="card-img-top" src="<?= base_url('assets/foto_berita/' . $berita->foto_berita) ?>" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title"><?= $berita->judul_berita ?></h5>
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