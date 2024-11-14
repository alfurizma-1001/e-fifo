<div class="container">
    <div id="header">
        <h1>E-FIFO</h1>
        <p>PT Charoen Pokphand Indonesia</p>
    </div>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="row w-100 justify-content-center gap-4">
            <!-- Input Form -->
            <div class="col-md-5 bg-white p-4 rounded shadow">
                <h3 class="text-center mb-4">Input New Item</h3>
                <form action="<?= base_url('add_item/store_data') ?>" method="post">
                    <div class="form-group">
                        <label for="kode">Kode Barang:</label>
                        <input type="text" class="form-control" id="kode" name="kode" required>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Barang:</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="form-group">
                        <label for="tgl_expired">Tanggal Expired:</label>
                        <input type="date" class="form-control" id="tgl_expired" name="tgl_expired" required>
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah:</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                    </div>

                    <div class="form-group">
                        <label for="status">Status Produk:</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="Release">Release</option>
                            <option value="Reject">Reject</option>
                            <option value="Hold">Hold</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

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