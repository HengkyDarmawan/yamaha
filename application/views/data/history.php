

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
                                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">History Reservasi</h6>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-center">
                                        <tr>
                                            <th>#</th>
                                            <th>Tanggal & Jam</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Lokasi</th>
                                            <th>karyawan</th>
                                            <th>status</th>
                                        </tr>
                                    </thead>
                                    <tfoot class="text-center">
                                        <tr>
                                            <th>#</th>
                                            <th>Tanggal & Jam</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Lokasi</th>
                                            <th>karyawan</th>
                                            <th>status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody class="text-center">
                                            <?php $i = 1; ?>
                                            <?php foreach ($janjiTemuAcc as $result) : ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $result['date']; ?><br><strong>(<?= $result['time']; ?>)</strong></td>
                                                    <td><?= $result['nama']; ?></td>
                                                    <td><?= $result['email']; ?></td>
                                                    <td><?= $result['phone']; ?></td>
                                                    <td><?= $result['message']; ?></td>
                                                    <td>Eko</td>
                                                    <td><?= $result['status']; ?></td>
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