<div class="container col-8">
    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('admin/petugas_simrs') ?>"><i class="fas fa-arrow-circle-left"> Kembali</i></a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">
                    <?= validation_errors() ?>
                    <form action="<?= base_url('admin/proses_edit_petugas/') . $data->id_petugas_simrs  ?>" method="POST">
                        <div class="form-group">
                            <label for="inputItem">Nama Petugas</label>
                            <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" value="<?= $data->nama_petugas ?>" placeholder="Nama Petugas" required>
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