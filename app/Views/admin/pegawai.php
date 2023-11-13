<?= $this->extend('admin/layouts/app'); ?>
<?= $this->section('content'); ?>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-petcare">List Pegawai</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Usename</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php $i = 1; ?>
                                     <?php foreach ($pegawai as $p) : ?>
                                        <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $p['username']; ?></td>
                                        <td><?= $p['password']; ?></td>
                                        <td><?= $p['email']; ?></td>
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