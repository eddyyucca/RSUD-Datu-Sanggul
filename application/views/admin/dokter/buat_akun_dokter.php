<div class="container col-8">
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('admin/bidang') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">
                    <?= validation_errors() ?>
                    <form action="<?= base_url('admin/proses_input_bidang')  ?>" method="POST">
                        <div class="form-group">
                            <label for="inputItem">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="inputItem">password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>