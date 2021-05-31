<div class="container col-8">
    <div class="card-body">
        <div class="card shadow mb-4">
            <div class="card-header">
                Edit Akun
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="container">
                        <?php if (validation_errors() == true) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors() ?>
                            </div>
                        <?php  } ?>
                        <form action="<?= base_url('admin/prosesedit/' . $akun->id_login) ?>" method="POST">
                            <div class="form-group">
                                <label for="inputItem">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $akun->username ?>">
                            </div>
                            <div class="form-group">
                                <label for="inputItem">Password</label>
                                <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="level">Level User</label>
                                <select name="level" id="level" class="custom-select">
                                    <option value="">--PILIH LEVEL--</option>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                    <option value="kepala_gs">Kepala SG</option>
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