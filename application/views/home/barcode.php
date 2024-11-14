<div class="container">
    <div id="header">
        <h1>E-FIFO</h1>
        <p>PT Charoen Pokphand Indonesia</p>
    </div>

    <div class="container">
        <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; margin-top: 20px;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Tanggal Expired</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Rak</th>
                    <th>Barcode</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($shelves)): ?>
                    <?php foreach ($shelves as $shelf): ?>
                        <tr>
                            <td><?= htmlspecialchars($shelf['id']) ?></td>
                            <td><?= htmlspecialchars($shelf['kode']) ?></td>
                            <td><?= htmlspecialchars($shelf['nama']) ?></td>
                            <td><?= htmlspecialchars($shelf['tgl_expired']) ?></td>
                            <td><?= htmlspecialchars($shelf['jumlah']) ?></td>
                            <td><?= htmlspecialchars($shelf['status']) ?></td>
                            <td><?= htmlspecialchars($shelf['rak']) ?></td>
                            <td>
                                <img src="<?= base_url('downloads/' . $shelf['barcode_image']) ?>" alt="Barcode"
                                    style="width: 50px; height: auto;">
                            </td>
                            <td>
                                <a href="<?= base_url('downloads/' . $shelf['barcode_image']) ?>" download>Download</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9">No data available.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
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