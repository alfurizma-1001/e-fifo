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
                    <th>Jumlah</th>
                    <th>Tanggal Expired</th>
                    <th>Destination</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($items)): ?>
                    <?php foreach ($items as $item): ?>
                        <tr>
                            <td><?= htmlspecialchars($item['id']) ?></td>
                            <td><?= htmlspecialchars($item['kode']) ?></td>
                            <td><?= htmlspecialchars($item['nama']) ?></td>
                            <td><?= htmlspecialchars($item['jumlah']) ?></td>
                            <td><?= htmlspecialchars($item['tgl_expired']) ?></td>
                            <td><?= htmlspecialchars($item['destination']) ?></td>
                            <td><?= htmlspecialchars($item['status']) ?></td>
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