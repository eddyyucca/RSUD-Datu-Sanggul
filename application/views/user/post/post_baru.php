<!-- <style>
    img {
        width: auto;
        height: auto;
    }
</style> -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Post Baru</div>
                <div class="card-body">

                    <form action="<?= base_url('user/post') ?>" method="post" enctype="multipart/form-data">
                        <script>
                            function readURL(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        $('#blah')
                                            .attr('src', e.target.result);
                                    };
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                        </script>
                        <div class="d-flex justify-content-center">
                            <img class="img-account-profile img-fluid border mb-2" src="<?= base_url('assets/img/upload.jpg') ?>" id="blah" alt="Images" />
                        </div>
                        <!-- Profile picture upload button-->
                        <hr class="mb-1">
                        <label class="btn btn-primary mt-1 " for="my-file-selector">
                            <input id="my-file-selector" name="foto" type="file" style="display:none" onchange="readURL(this);">
                            Upload image
                        </label>
                        <span class='label label-info' id="upload-file-info"></span>
                        <input type="text" class="form-control" name="judul_berita" placeholder="Judul">
                        <br>
                        <textarea id="konten" class="form-control" name="isi_berita" rows="100" cols="100"></textarea>
                        <br>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </form>
                    <!-- script text post -->
                    <script src="<?= base_url('assets') ?>/ckeditor/ckeditor.js"></script>
                    <script>
                        var konten = document.getElementById("konten");
                        CKEDITOR.replace(konten, {
                            language: 'en-gb'
                        });
                        CKEDITOR.config.allowedContent = true;
                        CKEDITOR.config.height = 300;
                        CKEDITOR.config.width = auto;
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>