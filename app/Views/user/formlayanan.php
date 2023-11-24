<?= $this->extend('user/layouts/app3'); ?>
<?= $this->section('content'); ?>
<div class="container-1">
<h2>Form Layanan</h2>

<form action="<?= base_url('user/booking')?>" method="POST">
    <label for="nama_pemilik">Nama Pemilik:</label>
    <input type="text" id="nama_pemilik" name="nama_pemilik" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="nomor_telepon">Nomor Telepon:</label>
    <input type="tel" id="nomor_telepon" name="nomor_telepon" required><br>

    <label for="nama_hewan">Nama Hewan:</label>
    <input type="text" id="nama_hewan" name="nama_hewan" required><br>

    <label for="jenis_hewan">Jenis Hewan:</label>
    <input type="text" id="jenis_hewan" name="jenis_hewan" required><br>

    <label for="usia_hewan">Usia Hewan:</label>
    <input type="text" id="usia_hewan" name="usia_hewan" required><br>

    <label for="layanan">Layanan:</label>
    <select id="layanan" name="layanan" required>
        <option value="layanan1">Pet Care</option>
        <option value="layanan2">Pet Training</option>
        <option value="layanan3">Combing</option>
        <option value="layanan4">Teeth Brush</option>
    </select><br>
</br>
    <label for="tanggal_booking">Tanggal Booking:</label>
    <input type="datetime-local" id="tanggal_booking" name="tanggal_booking"><br>
</br>
    <button type="submit">Submit</button>
</br>
</form>

</div>
        <?= $this->endSection(); ?>