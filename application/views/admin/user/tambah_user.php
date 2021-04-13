<div class="container col-8">
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Akun Baru
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="container">
                        <?php if (validation_errors() == true) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors() ?>
                            </div>
                        <?php  } ?>
                        <form action="<?= base_url('admin/prosestambah_akun') ?>" method="POST">
                            <div class="form-group">
                                <label for="inputItem">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="inputItem">Password</label>
                                <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="level">Level Akun</label>
                                <select name="level" id="level" class="custom-select">
                                    <option value="">--PILIH LEVEL--</option>
                                    <option value="admin">Admin</option>
                                    <option value="yanmed">Pelayanan Medik</option>
                                </select>
                            </div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>