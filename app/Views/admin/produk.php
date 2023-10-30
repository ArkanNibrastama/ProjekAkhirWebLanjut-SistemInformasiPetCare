<?= $this->extend('admin/layouts/app'); ?>
<?= $this->section('content'); ?>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-petcare">List Produk</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto Produk</th>
                                            <th>Jenis Produk</th>
                                            <th>Nama Produk</th>
                                            <th>Stok Produk</th>
                                            <th>Harga Produk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                     <?php foreach ($produk as $p) : ?>
                                        <tr>
                                        <td><?= $i++; ?></td>
                                        <td><img src="<?= $p['foto_produk'] ?? 'https://bootdey.com/img/Content/avatar/avatar7.png' ?> ?>" alt="" height="100px" width="100px"></td>
                                        <td><?= $p['namajenis_produk']; ?></td>
                                        <td><?= $p['nama_produk']; ?></td>
                                        <td><?= $p['stok_produk']; ?></td>
                                        <td><?= $p['harga_produk']; ?></td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm mr-2">
                                                <i class="fas fa-pencil"></i> Edit
                                            </a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-sm mr-2 delete-button" data-url=""><i class="fas fa-trash"></i> Delete</a>
                                        </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<?= $this->endSection(); ?> 