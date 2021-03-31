<div class="container col-md-6 col-lg-4">
    <div class="card mt-5">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="row">
                <div class="container-fluid">

                    <?= validation_errors() ?>
                    <form action="<?= base_url('dokter/tanggal_dokter') ?>" method="POST">
                        <div class="form-group">
                            <label for="no_rm">Dari tanggal</label>
                            <input type="date" class="form-control" required id="tanggal_awal" name="tanggal_awal" placeholder="Tanggal Awal">
                        </div>
                        <div class="form-group">
                            <label for="no_rm">Sampai Dengan</label>
                            <input type="date" class="form-control" required id="tanggal_akhir" name="tanggal_akhir" placeholder="Tanggal Akhir">
                        </div>
                        <div class="form-group">
                            <label for="date">Tanggal Lahir</label>
                            <select class="form-control" name="poli" id="">
                                <option value="">-- PILIH POLI --</option>
                                <?php foreach ($poliklinik as $poli) { ?>
                                    <option value="<?= $poli->nm_poli ?>"><?= $poli->nm_poli ?></option>
                                <?php   } ?>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Buat Tanggal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>