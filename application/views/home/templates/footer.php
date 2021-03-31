<section class="bg-img-cover overlay overlay-light overlay-80 py-15" style='background-image: url("<?= base_url("assets/img/ruangbedah.jpg") ?>"); background-attachment:fixed;'>
    <div class="container z-1">
        <div class="mt-5">
            <div class="display-4 mb-3 text-dark">Siap melayani anda sepenuh hati</div>
            <a class="btn btn-outline-orange btn-marketing " href="#!">Hubungi Kami</a>
        </div>
    </div>
    <div class="svg-border-waves text-dark">
        <!-- Wave SVG Border--><svg class="wave" style="pointer-events: none" fill="currentColor" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
            <defs>
                <style>
                    .a {
                        fill: none;
                    }

                    .b {
                        clip-path: url(#a);
                    }

                    .d {
                        opacity: 0.5;
                        isolation: isolate;
                    }
                </style>
            </defs>
            <clippath id="a">
                <rect class="a" width="1920" height="75"></rect>
            </clippath>
            <g class="b">
                <path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"></path>
            </g>
            <g class="b">
                <path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"></path>
            </g>
            <g class="b">
                <path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"></path>
            </g>
            <g class="b">
                <path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"></path>
            </g>
        </svg>
    </div>
</section>
<div id="layoutDefault_footer">
    <footer class="footer pt-10 pb-5 mt-auto bg-dark footer-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="footer-brand">Rumah Sakit Umum Daerah Datu Sanggul Kabupaten Tapin</div>
                    <div class="mb-3">Developer IT</div>
                    <!-- <div class="icon-list-social mb-5">
                        <a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-instagram"></i></a><a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-facebook"></i></a><a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-github"></i></a><a class="icon-list-social-link" href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                    </div> -->
                </div>
            </div>
            <hr class="my-5" />
            <div class="row align-items-center">
                <div class="col-md-6 small">Copyright &copy; Team IT - RSUD Datu Sanggul</div>
                <div class="col-md-6 text-md-right small">
                    <a href="javascript:void(0);">Privacy Policy</a>
                    &middot;
                    <a href="javascript:void(0);">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>

    </footer>
</div>
</div>
<script src="<?= base_url('assets'); ?>/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets'); ?>/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets'); ?>/js/scripts.js"></script>
<script src="<?= base_url('assets'); ?>/js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/scripts_count.js"></script>
<script src="<?= base_url('assets'); ?>/js/lity.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/aos.js"></script>
<script src="<?= base_url('assets'); ?>/datepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?= base_url('assets'); ?>/datepicker/js/locales/bootstrap-datetimepicker.fr.js"></script>
<script src="<?= base_url('assets'); ?>/pwa/js/main.js"></script>
<script>
    $('.form_date').datetimepicker({
        language: 'id',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0,
        startDate: new Date(),
        daysOfWeekDisabled: [0, 7]
    });
</script>
<script>
    $(document).ready(function() {
        $(".preloader").fadeOut();
    })
</script>
</body>

</html>