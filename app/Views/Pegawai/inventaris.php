<?= $this->extend('Pegawai/layouts/app'); ?>
<?= $this->section('content'); ?>

                    

<!-- Begin Page Content -->
<div class="container-fluid">
            <!-- Page Heading -->
            <div
              class="d-sm-flex align-items-center justify-content-between mb-4"
            >
              <h1 class="h3 mb-0 text-gray-800">Inventaris</h1>
            </div>
            <!-- Content Row -->
            <div class="row">
             
            <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-dark">List Barang</h6>
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
      <th>Nama Barang</th>
      <th>Jumlah</th>
    </tr>
        <tr>
            <td>Stik Bulu</td>
            <td>10</td>
            <td>
              <a href="<?= base_url('')?>">Tambah Barang</a>
              <br>
              <a href="<?= base_url('')?>">Update Barang</a>
            </td>
        </tr>
  </table>
  </div>
    </div>
        </div>
        <!-- End of Main Content -->

<?= $this->endSection(); ?>