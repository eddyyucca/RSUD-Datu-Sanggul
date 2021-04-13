<!DOCTYPE html>
<html lang="en">
<!-- BY: Majatekno.id -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>RSUD Datu Sanggul Kab.Tapin</title>
    <style type="text/css">
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }

        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }
    </style>
    <link href="<?= base_url('assets'); ?>/css/styles.css" rel="stylesheet" />
    <link href="<?= base_url('assets'); ?>/css/styles_count.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/lity.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/aos.css" />

    <link rel="icon" type="image/x-icon" href="<?= base_url('assets'); ?>/img/favicon.ico" />

    <link rel="stylesheet" href="<?= base_url('assets'); ?>/datepicker/css/bootstrap-datetimepicker.min.css" />


    <script data-search-pseudo-elements defer src="<?= base_url('assets'); ?>/js/all.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets'); ?>/js/feather.min.js" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="<?= base_url('assets/mobiris'); ?>/instagram-feed/style.css" />
    <script src="<?= base_url('assets/mobiris'); ?>/instagram-feed/index.js"></script>
</head>

<body>
    <div class="preloader">
        <div class="loading">
            <img src="<?= base_url('assets/gif/preload.gif') ?>" width="80">
            <p>Harap Tunggu</p>
        </div>
    </div>
    <div id="layoutDefault_content">
        <main>
            <nav class="navbar navbar-marketing navbar-expand-lg bg-primary navbar-dark fixed-top">
                <div class="container">
                    <a href="<?= base_url('home'); ?>">
                        <img src="<?= base_url('assets/') ?>img/rsud_datu_sanggul.png" alt="rsud_datusanggul" width=50 />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i data-feather="menu"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mr-lg-5">
                            <li class="nav-item dropdown no-caret">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">Info Dokter<i class="fas fa-chevron-right dropdown-arrow"></i></a>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                                    <a class="dropdown-item py-3" href="<?= base_url('info_dokter'); ?>">
                                        <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="book-open"></i></div>
                                        <div>
                                            <div class="small">POLIKLINIK</div>
                                            Jadwal dokter dan info poliklinik
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <!-- <li class="nav-item dropdown no-caret">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">Profil Rumah Sakit<i class="fas fa-chevron-right dropdown-arrow"></i></a>
                                <div class="dropdown-menu dropdown-menu-right animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                                    <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/quickstart" target="_blank">
                                        <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="book-open"></i></div>
                                        <div>
                                            <div class="small text-gray-500">Visi dan Misi</div>
                                            Visi dan Misi
                                        </div>
                                    </a>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/components" target="_blank">
                                        <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="code"></i></div>
                                        <div>
                                            <div class="small text-gray-500">Sejaarah</div>
                                            Sejaarah Rumah SAkit Umum Datu Sanggul
                                        </div>
                                    </a>
                                    <div class="dropdown-divider m-0"></div>
                                </div>
                            </li> -->
                            <!-- <li class="nav-item"><a class="nav-link" href="<?= base_url(''); ?>/Startup_group" style="color:white">Info Kamar </a>
                            </li> -->
                            <!-- <li class="nav-item"><a class="nav-link" href="<?= base_url('blog'); ?>" style="color:white">Artikel</a></li> -->
                            <a class="btn font-weight-500 ml-lg-4 btn-teal" href="<?= base_url('login'); ?>"><b>Login</b> <i class="ml-2" data-feather="arrow-right"></i></a>
                        </ul>
                        <!-- <i class="btn btn-outline-white px-4 ml-lg-4" href="#">Daftar Rawat Jalan<i class="fas fa-arrow-right ml-1"></i></a> -->
                    </div>
                </div>
            </nav>
        </main>