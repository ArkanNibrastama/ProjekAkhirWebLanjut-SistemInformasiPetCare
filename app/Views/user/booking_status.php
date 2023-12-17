<?= $this->extend('user/layouts/app'); ?>
<?= $this->section('content'); ?>

                    

<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
              style="margin-top: 150px;"
            >
              <h1 class="h3 mb-0 text-gray-800">Booking Status</h1>
            </div>
            <!-- Content Row -->
            <div class="row">
             
            <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">Status</h6>
                </div>
            <div class="card-body">
                <div class="table-responsive">
  <table
        class="table table-bordered"
        id="dataTable"
        width="100%"
        cellspacing="0"
        >
    <tr>
      <th>No</th>
      <th>Tanggal Booking</th>
      <th>Nama Pemilik</th>
      <th>No Telp</th>
      <th>Nama Hewan</th>
      <th>Jenis Hewan</th>
      <th>Usia Hewan</th>
      <th>Layanan</th>
      <th>Status</th>
    </tr>
    <!-- loop -->
    <?php $i = 1; ?>
    <?php foreach($booking_status as $d){ ?>
    <tr> 
        <td><?= $i++; ?></td>
        <td><?= $d['tanggal_booking'] ?></td>
        <td><?= $d['nama_pemilik'] ?></td>
        <td><?= $d['nomor_telepon'] ?></td>
        <td><?= $d['nama_hewan'] ?></td>
        <td><?= $d['jenis_hewan'] ?></td>
        <td><?= $d['usia_hewan'] ?></td>
        <td><?= $d['nama_service'] ?></td>
        <td>

            <?php if ($d['status'] == 1) { ?>
                <div class="btn btn-warning">Menunggu Konfirmasi</div>
            <?php } ?>
            <?php if ($d['status'] == 2) { ?>
                <div class="btn btn-info">Booking Dikonfirmasi</div>
            <?php } ?>
            <?php if ($d['status'] == 3) { ?>
                <div class="btn btn-success">Sudah Selesai</div>
            <?php } ?>
            <?php if ($d['status'] == 4) { ?>
                <div class="btn btn-danger">Dibatalkan</div>
            <?php } ?>

        </td>
    </tr>
    <?php } ?>
  </table>
  </div>
    </div>
        </div>
        <!-- End of Main Content -->
        

<?= $this->endSection(); ?>