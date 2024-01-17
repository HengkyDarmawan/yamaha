                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $title;?></h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-flex">
                                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Data Karyawan</h6>
                                <a href="<?= base_url('karyawan/addKaryawan'); ?>" class="btn btn-outline-primary btn-md">Add</a>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-center">
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Tempat Tinggal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot class="text-center">
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Tempat Tinggal</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody class="text-center">
                                            <?php $i = 1; ?>
                                            <?php foreach ($karyawan as $result) : ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $result['nama']; ?></td>
                                                    <td><?= $result['email']; ?></td>
                                                    <td><?= $result['phone']; ?></td>
                                                    <td><?= $result['tmpt_tinggal']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url(); ?>karyawan/editkaryawan/<?= $result['id_karyawan']; ?>" class="btn btn-outline-success btn-sm">Update</a>
                                                        <a href="<?= base_url(); ?>karyawan/hapuskaryawan/<?= $result['id_karyawan']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('yakin?');">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->