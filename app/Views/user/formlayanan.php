<?= $this->extend('user/layouts/app3'); ?>
<?= $this->section('content'); ?>
<div class="container-1">
    <h2>Pet Care Service Form</h2>

        <!-- Informasi Pemilik Hewan -->
        <fieldset>
            <legend>Informasi Pemilik Hewan</legend>
            <label for="owner_name">Nama Pemilik:</label>
            <input type="text" id="owner_name" name="owner_name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Nomor Telepon:</label>
            <input type="tel" id="phone" name="phone" required>
        </fieldset>

        <!-- Informasi Hewan Peliharaan -->
        <fieldset>
            <legend>Informasi Hewan Peliharaan</legend>
            <label for="pet_name">Nama Hewan Peliharaan:</label>
            <input type="text" id="pet_name" name="pet_name" required>

            <label for="pet_type">Jenis Hewan:</label>
            <input type="text" id="pet_type" name="pet_type" required>

            <label for="pet_age">Usia Hewan (tahun):</label>
            <input type="number" id="pet_age" name="pet_age" required>

            <label for="checkup_date">Tanggal Pemeriksaan:</label>
            <input type="date" id="checkup_date" name="checkup_date" required>
        </fieldset>
            <!-- Formulir -->
        
                <!-- Keterangan Tambahan -->
                <fieldset>
                    <legend>Keterangan Tambahan</legend>
                     <textarea id="additional_notes" name="additional_notes" rows="4" placeholder="Masukkan catatan tambahan..."></textarea>
                </fieldset>

        
                <!-- Tombol Kirim -->
                <button type="submit">Kirim Formulir</button>
            </form>
        </div>
        <?= $this->endSection(); ?>