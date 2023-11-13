<?= $this->extend('Pegawai/layouts/app'); ?>
<?= $this->section('content'); ?>

                    

<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Konfirmasi Booking</h1>
            </div>
            <!-- Content Row -->
            <div class="row">
             
            <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">History pelayanan</h6>
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
      <th>Id</th>
      <th>Tanggal Booking</th>
      <th>Id Karyawan</th>
      <th>Layanan</th>
    </tr>
        <tr>
            <td>1</td>
            <td>12-11-2023</td>
            <td>1</td>
            <td>Grooming</td>
        </tr>
  </table>
  </div>
    </div>
        </div>
        <!-- End of Main Content -->
        

<?= $this->endSection(); ?>