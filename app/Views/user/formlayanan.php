<?= $this->extend('user/layouts/app3'); ?>
<?= $this->section('content'); ?>
<div class="container-1" style="border-radius: 20px;">
<h2>Form Layanan</h2>

<form action="<?= base_url('user/booking')?>" method="POST">

    <label for="nama_pemilik">Nama Pemilik:</label>
    <input type="text" id="nama_pemilik" name="nama_pemilik" required><br>

    <label for="nomor_telepon">Nomor Telepon:</label>
    <input type="tel" id="nomor_telepon" name="nomor_telepon" required><br>

    <label for="nama_hewan">Nama Hewan:</label>
    <input type="text" id="nama_hewan" name="nama_hewan" required><br>

    <label for="jenis_hewan">Jenis Hewan:</label>
    <input type="text" id="jenis_hewan" name="jenis_hewan" required><br>

    <label for="usia_hewan">Usia Hewan:</label>
    <input type="text" id="usia_hewan" name="usia_hewan" required><br>

    <label for="layanan">Layanan:</label>
    <select class="form-select" id="layanan" name="layanan" required>
        <?php
            foreach ($services as $service){
        ?>  
            <option value="<?= $service['id'] ?>">
                <?= $service['nama_service'] ?>
            </option>
        <?php 
            }
        ?>
    </select><br>
    <label for="tanggal_booking">Tanggal Booking:</label>
    <input class="form-control" type="datetime-local" id="tanggal_booking" name="tanggal_booking"><br>
</br>
<div class="text-center">
                <button type="submit" class="btn btn-success w-25 p-2">Submit</button>
            </div>
</br>
</form>

</div>
        <?= $this->endSection(); ?>