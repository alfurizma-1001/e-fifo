<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Form Cooking /</span> Pemeriksaan Pemasakan
            Dengan Tumbling</h4>
        <div class="demo-inline-spacing">
            <div class="d-flex align-items-center justify-content-between">
                <a href="<?= base_url('pem_tumbling/tambah') ?>" class="btn btn-primary">
                    <span class="tf-icons bx bxs-plus-circle"></span>&nbsp; Tambah
                </a>
                <div class="d-flex align-items-center">
                    <label for="tanggal" class="mr-2">Tanggal:</label>
                    <input type="date" class="form-control mr-2" id="tanggal" name="tanggal">
                </div>
                <script>
                    document.getElementById('tanggal').addEventListener('input', function () {
                        const filterDate = this.value;
                        const table = document.getElementById('tumblingTable');
                        const rows = table.querySelectorAll('tbody tr');

                        rows.forEach(row => {
                            const dateCell = row.cells[2]; // Assuming the date is in the 3rd column
                            if (dateCell.textContent.startsWith(filterDate)) {
                                row.style.display = '';
                            } else {
                                row.style.display = 'none';
                            }
                        });
                    });
                </script>
            </div>
        </div>
        <hr class="my-5" />
        <!-- Responsive Table -->
        <div class="card">
            <?php if ($this->session->flashdata('success_msg')): ?>
                <div id="successModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Success!</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <?= $this->session->flashdata('success_msg') ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="close btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif ?>

            <?php if ($this->session->flashdata('error_msg')): ?>
                <div id="errorModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Error!</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <?= $this->session->flashdata('error_msg') ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="close btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif ?>
            <!-- / Alert Modals -->
            <!-- Responsive Table -->
            <div class="card">
                <h5 class="card-header">Data Pemeriksaan Pemasakan Dengan Tumbling</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table" id="tumblingTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Date</th>
                                <th>Shift</th>
                                <th>Nama Produk</th>
                                <th>Batch No. 1</th>
                                <th>Batch No. 2</th>
                                <th>Identifikasi Daging</th>
                                <th>Asal Daging</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($pem_tumbling as $val) {
                                ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $val->date; ?></td>
                                    <td><?= $val->shift; ?></td>
                                    <td><?= $val->nama_produk; ?></td>
                                    <td><?= $val->batch_no; ?></td>
                                    <td><?= $val->section2_batch_no; ?></td>
                                    <td><?= $val->identifikasi_daging; ?></td>
                                    <td><?= $val->asal; ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('pem_tumbling/edit/' . $val->uuid); ?>"
                                            class="btn btn-warning">
                                            <i class="bx bx-edit"></i> Edit
                                        </a>
                                        <a href="<?= base_url('pem_tumbling/export_tumbling_excel/' . $val->uuid); ?>"
                                            class="btn btn-success" target="_blank" title="Export Tumbling Report to Excel">
                                            <i class="bx bx-file"></i> Export to Excel
                                        </a>
                                        <a href="<?= base_url('pem_tumbling/hapus/' . $val->uuid); ?>"
                                            class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this item?');">
                                            <i class="bx bx-trash"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
            <!--/ Responsive Table -->
        </div>
        <!-- / Content -->
    </div>
    <script>
        $(document).ready(function () {
            <?php if ($this->session->flashdata('success_msg')): ?>
                $('#successModal').modal('show');
            <?php endif ?>

            <?php if ($this->session->flashdata('error_msg')): ?>
                $('#errorModal').modal('show');
            <?php endif ?>

            $('.modal .close').on('click', function () {
                $(this).closest('.modal').modal('hide');
            });
        });
    </script>