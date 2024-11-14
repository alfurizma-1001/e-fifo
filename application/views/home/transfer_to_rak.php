<div class="container">
    <div id="header">
        <h1>E-FIFO</h1>
        <p>PT Charoen Pokphand Indonesia</p>
    </div>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="row w-100 justify-content-center gap-4">
            <!-- Transfer Form to Shelves -->
            <div class="col-md-5 bg-white p-4 rounded shadow">
                <h3 class="text-center mb-4">Transfer Item to Shelves</h3>
                <form action="<?= base_url('transfer_to_rak/transfer_to_shelves') ?>" method="post">
                    <div class="form-group">
                        <label for="kode_transfer">Kode Barang:</label>
                        <select class="form-control" id="kode_transfer" name="kode" required>
                            <option value="">Select Kode</option>
                            <?php foreach ($storage_items as $item): ?>
                                <option value="<?php echo $item['kode']; ?>" data-nama="<?php echo $item['nama']; ?>"
                                    data-jumlah="<?php echo $item['jumlah']; ?>"
                                    data-tgl_expired="<?php echo $item['tgl_expired']; ?>"
                                    data-status="<?php echo $item['status']; ?>">
                                    <?php echo $item['kode']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama_transfer">Nama Barang:</label>
                        <input type="text" class="form-control" id="nama_transfer" name="nama" readonly required>
                    </div>

                    <div class="form-group">
                        <label for="jumlah_available">Jumlah Tersedia:</label>
                        <input type="number" class="form-control" id="jumlah_available" name="jumlah_available"
                            readonly>
                    </div>

                    <div class="form-group">
                        <label for="tgl_expired_available">Tanggal Expired:</label>
                        <input type="date" class="form-control" id="tgl_expired_available" name="tgl_expired_available"
                            readonly>
                    </div>

                    <div class="form-group">
                        <label for="status_available">Status:</label>
                        <input type="text" class="form-control" id="status_available" name="status_available" readonly>
                    </div>

                    <div class="form-group">
                        <label for="jumlah_transfer">Jumlah Transfer:</label>
                        <input type="number" class="form-control" id="jumlah_transfer" name="jumlah_transfer" required
                            min="1">
                    </div>

                    <div class="form-group">
                        <label for="rak">Rak:</label>
                        <select class="form-control" id="rak" name="rak" required>
                            <option value="">Select Rak</option>
                            <?php
                            // Loop through racks 1 to 46 and their variations
                            for ($i = 1; $i <= 46; $i++): ?>
                                <option value="Rak <?= $i ?>">Rak <?= $i ?></option>
                                <option value="Rak <?= $i ?>_2">Rak <?= $i ?>_2</option>
                                <option value="Rak <?= $i ?>_3">Rak <?= $i ?>_3</option>
                            <?php endfor; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="barcode">Generated Barcode:</label>
                        <input type="text" class="form-control" id="barcode" name="barcode"
                            value="<?= isset($barcode) ? $barcode : '' ?>" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Transfer</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    // Update Nama and Jumlah fields when Kode is selected
    document.getElementById('kode_transfer').addEventListener('change', function () {
        var selectedOption = this.options[this.selectedIndex];

        // Check if an option is selected
        if (selectedOption.value) {
            var nama = selectedOption.getAttribute('data-nama');
            var jumlah = selectedOption.getAttribute('data-jumlah');
            var tgl_expired = selectedOption.getAttribute('data-tgl_expired');
            var status = selectedOption.getAttribute('data-status');

            document.getElementById('nama_transfer').value = nama || '';
            document.getElementById('jumlah_available').value = jumlah || '';
            document.getElementById('tgl_expired_available').value = tgl_expired || '';
            document.getElementById('status_available').value = status || '';
            document.getElementById('jumlah_transfer').setAttribute('max', jumlah); // Set max for jumlah transfer
        } else {
            document.getElementById('nama_transfer').value = '';
            document.getElementById('jumlah_available').value = '';
            document.getElementById('tgl_expired_available').value = '';
            document.getElementById('status_available').value = '';
        }
    });
</script>


<link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if ($this->session->flashdata('success')): ?>
    <script>
        Swal.fire({
            title: 'Success!',
            text: "<?= $this->session->flashdata('success'); ?>",
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
<?php endif; ?>