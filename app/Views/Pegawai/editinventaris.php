<?= $this->extend('Pegawai/layouts/app'); ?>
<?= $this->section('content'); ?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-petcare">Form Update inventaris</h6>
    </div>
    <div class="card-body">
        <form action="<?= base_url('/pegawai/inventaris/' . $inv['id']) ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group"><br>
                <?= csrf_field() ?>
                <input type="hidden" name="_method" value="PUT">
                <label for="nama">Nama Inventaris</label>
                <input type="text" name="nama_inventaris" class="form-control <?php if (session()->getFlashdata('error_nama_inventaris')) echo 'is-invalid'; ?>" value="<?= $inv['nama_inventaris']; ?>">
                <?php if (session()->getFlashdata('error_nama_inventaris')) : ?>
                    <div class="invalid-feedback">
                        <?= session()->getFlashdata('error_nama_inventaris') ?>
                    </div>
                <?php endif; ?>
            </div>
            <br>
            <a href="/pegawai/inventaris/" class="btn btn-warning">Kembali</a>
            <button type="submit" class="btn btn-petcare">Simpan</button>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>