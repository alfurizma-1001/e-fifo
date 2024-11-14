<div class="container">
    <div id="header">
        <h1>E-FIFO</h1>
        <p>PT Charoen Pokphand Indonesia</p>
    </div>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="row w-100 justify-content-center gap-4">
            <!-- Transfer Between Racks Form -->
            <div class="row w-100 justify-content-center mt-5">
                <div class="col-md-10 bg-white p-4 rounded shadow">
                    <h3 class="text-center mb-4">Transfer Item Between Racks</h3>
                    <form action="<?= base_url('transfer_between_rak/transfer_between_racks') ?>" method="post">

                        <div class="form-group">
                            <label for="source_rak">Source Rak:</label>
                            <select class="form-control" id="source_rak" name="source_rak" required>
                                <option value="">Select Source Rak</option>
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
                            <label for="kode_between">Kode Barang:</label>
                            <select class="form-control" id="kode_between" name="kode" required>
                                <option value="">Select Kode</option>
                                <!-- Kode options will be populated based on selected source rak -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nama_between">Nama Barang:</label>
                            <input type="text" class="form-control" id="nama_between" name="nama" readonly required>
                        </div>

                        <div class="form-group">
                            <label for="jumlah_between">Jumlah Tersedia:</label>
                            <input type="number" class="form-control" id="jumlah_between" name="jumlah_available"
                                readonly>
                        </div>

                        <div class="form-group">
                            <label for="tgl_expired_between">Tanggal Expired:</label>
                            <input type="text" class="form-control" id="tgl_expired_between" name="tgl_expired"
                                readonly>
                        </div>

                        <div class="form-group">
                            <label for="status_between">Status:</label>
                            <input type="text" class="form-control" id="status_between" name="status" readonly>
                        </div>

                        <div class="form-group">
                            <label for="jumlah_transfer_between">Jumlah Transfer:</label>
                            <input type="number" class="form-control" id="jumlah_transfer_between"
                                name="jumlah_transfer" required min="1">
                        </div>

                        <div class="form-group">
                            <label for="destination_rak">Destination Rak:</label>
                            <select class="form-control" id="destination_rak" name="destination_rak" required>
                                <option value="">Select Destination Rak</option>
                                <?php
                                // Loop through racks 1 to 46 and their variations
                                for ($i = 1; $i <= 46; $i++): ?>
                                    <option value="Rak <?= $i ?>">Rak <?= $i ?></option>
                                    <option value="Rak <?= $i ?>_2">Rak <?= $i ?>_2</option>
                                    <option value="Rak <?= $i ?>_3">Rak <?= $i ?>_3</option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Transfer Between Racks</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Decode PHP arrays for rack items to JavaScript
    const rackItems = <?= $rakItems ?>;

    // Function to update Kode dropdown based on selected Source Rak
    document.getElementById('source_rak').addEventListener('change', function () {
        const selectedRak = this.value;
        const kodeDropdown = document.getElementById('kode_between'); // Corrected ID
        kodeDropdown.innerHTML = '<option value="">Select Kode</option>'; // Reset Kode options

        if (rackItems[selectedRak]) {
            rackItems[selectedRak].forEach(item => {
                const option = document.createElement('option');
                option.value = item.kode;
                option.textContent = item.kode; // Display the kode in the dropdown
                option.dataset.itemName = item.nama; // Store the item name
                option.dataset.availableQuantity = item.jumlah; // Store the available quantity
                option.dataset.expirationDate = item.tgl_expired; // Store the expiration date
                option.dataset.itemStatus = item.status; // Store the status
                kodeDropdown.appendChild(option);
            });
        }
    });

    // Update fields when Kode is selected
    document.getElementById('kode_between').addEventListener('change', function () {
        const selectedOption = this.options[this.selectedIndex];
        document.getElementById('nama_between').value = selectedOption.dataset.itemName || '';
        document.getElementById('jumlah_between').value = selectedOption.dataset.availableQuantity || '';
        document.getElementById('tgl_expired_between').value = selectedOption.dataset.expirationDate || '';
        document.getElementById('status_between').value = selectedOption.dataset.itemStatus || '';
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