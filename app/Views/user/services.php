<?= $this->extend('user/layouts/app'); ?>
<?= $this->section('content'); ?>

    <div class="container-fluid" style="background-color:salmon; padding:50px;">
        <div class="row align-items-center">
            <div class="col">
                <img id="img-service" src="<?= base_url('assets/img/service_petcare.jpg') ?>" alt="" class="img-fluid" style="border-radius:25px;">
            </div>
            <div class="col">
                <h3>Pet Care</h3>
                <p>Layanan pet care adalah rangkaian layanan yang mencakup perawatan kesehatan, kebersihan, dan kesejahteraan hewan peliharaan. Ini meliputi pemberian vaksinasi, pemeriksaan kesehatan rutin, dan pengobatan medis untuk memastikan bahwa hewan peliharaan Anda tetap sehat, bahagia, dan dalam kondisi terbaiknya.</p>
                <button type="button" class="btn btn-info" style="color:whitesmoke; padding:8px;">Make an Appoinment Now!</button>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="padding:50px;">
        <div class="row align-items-center">
            <div class="col text-end">
                <h3>Pet Training</h3>
                <p>Layanan pet training adalah program yang dirancang untuk membantu pemilik hewan peliharaan dalam melatih dan mendidik binatang kesayangan mereka. Ini mencakup pelatihan kepemilikan, perintah dasar, perilaku, dan keterampilan sosial yang diperlukan untuk memastikan bahwa hewan peliharaan Anda menjadi patuh, ramah.</p>
                <button type="button" class="btn btn-info" style="color:whitesmoke; padding:8px;">Make an Appoinment Now!</button>
            </div>
            <div class="col">
                <img id="img-service" src="<?= base_url('assets/img/service_pettraining.jpg') ?>" alt="" class="img-fluid" style="border-radius:25px;">
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color:salmon; padding:50px;">
        <div class="row align-items-center">
            <div class="col">
                <img id="img-service" src="<?= base_url('assets/img/service_combing.jpg') ?>" alt="" class="img-fluid" style="border-radius:25px;">
            </div>
            <div class="col">
                <h3>Combing</h3>
                <p>Layanan combing adalah proses perawatan hewan peliharaan yang melibatkan penyisiran atau penyikatan bulu. Ini bertujuan untuk menjaga kebersihan, kesehatan, dan kenyamanan hewan peliharaan Anda. Penyisiran secara teratur membantu menghilangkan bulu mati, mencegah masalah kulit, serta meminimalkan rambut yang berjatuhan di rumah Anda.</p>
                <button type="button" class="btn btn-info" style="color:whitesmoke; padding:8px;">Make an Appoinment Now!</button>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="padding:50px;">
        <div class="row align-items-center">
            <div class="col text-end">
                <h3>Teeth Brush</h3>
                <p>Layanan teeth brush adalah tindakan membersihkan gigi hewan peliharaan Anda untuk menjaga kesehatan mulut mereka. Ini melibatkan penggunaan sikat gigi khusus dan pasta gigi yang dirancang untuk hewan peliharaan. Membersihkan gigi secara teratur membantu mencegah masalah gigi dan mulut seperti plak, tartar, bau mulut, dan peradangan gusi.</p>
                <button type="button" class="btn btn-info" style="color:whitesmoke; padding:8px;">Make an Appoinment Now!</button>
            </div>
            <div class="col">
                <img id="img-service" src="<?= base_url('assets/img/service_teethbrushing.jpg') ?>" alt="" class="img-fluid" style="border-radius:25px;">
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>