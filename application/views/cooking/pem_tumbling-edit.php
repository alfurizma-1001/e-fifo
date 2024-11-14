<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Form Cooking /</span> Edit</h4>
        <div class="card">
            <h5 class="card-header">Edit Data Pemeriksaan Pemasakan Dengan Tumbling</h5>
            <div class="card-body">
                <form action="<?= base_url('pem_tumbling/update/' . $pem_tumbling->uuid) ?>" method="post">
                    <input type="hidden" name="uuid" value="<?= $pem_tumbling->uuid ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="date" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="date" name="date"
                                    value="<?= $pem_tumbling->date ?>">
                            </div>
                            <div class="mb-3">
                                <label for="shift" class="form-label">Shift</label>
                                <input type="text" class="form-control" id="shift" name="shift"
                                    value="<?= $pem_tumbling->shift ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nama_produk" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                                    value="<?= $pem_tumbling->nama_produk ?>">
                            </div>
                            <div class="mb-3">
                                <label for="batch_no" class="form-label">Batch No</label>
                                <input type="text" class="form-control" id="batch_no" name="batch_no"
                                    value="<?= $pem_tumbling->batch_no ?>">
                            </div>
                            <div class="mb-3">
                                <label for="identifikasi_daging" class="form-label">Identifikasi Daging</label>
                                <input type="text" class="form-control" id="identifikasi_daging"
                                    name="identifikasi_daging" value="<?= $pem_tumbling->identifikasi_daging ?>">
                            </div>
                            <div class="mb-3">
                                <label for="asal" class="form-label">Asal</label>
                                <input type="text" class="form-control" id="asal" name="asal"
                                    value="<?= $pem_tumbling->asal ?>">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_produksi_kode" class="form-label">Tanggal Produksi Kode</label>
                                <input type="text" class="form-control" id="tanggal_produksi_kode"
                                    name="tanggal_produksi_kode" value="<?= $pem_tumbling->tanggal_produksi_kode ?>">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_produksi_kode2" class="form-label">Tanggal Produksi Kode 2</label>
                                <input type="text" class="form-control" id="tanggal_produksi_kode2"
                                    name="tanggal_produksi_kode2" value="<?= $pem_tumbling->tanggal_produksi_kode2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_produksi_kode3" class="form-label">Tanggal Produksi Kode 3</label>
                                <input type="text" class="form-control" id="tanggal_produksi_kode3"
                                    name="tanggal_produksi_kode3" value="<?= $pem_tumbling->tanggal_produksi_kode3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_daging" class="form-label">Berat Daging</label>
                                <input type="text" class="form-control" id="berat_daging" name="berat_daging"
                                    value="<?= $pem_tumbling->berat_daging ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging" class="form-label">Suhu Daging</label>
                                <input type="text" class="form-control" id="suhu_daging" name="suhu_daging"
                                    value="<?= $pem_tumbling->suhu_daging ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging2" class="form-label">Suhu Daging 2</label>
                                <input type="text" class="form-control" id="suhu_daging2" name="suhu_daging2"
                                    value="<?= $pem_tumbling->suhu_daging2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging3" class="form-label">Suhu Daging 3</label>
                                <input type="text" class="form-control" id="suhu_daging3" name="suhu_daging3"
                                    value="<?= $pem_tumbling->suhu_daging3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging4" class="form-label">Suhu Daging 4</label>
                                <input type="text" class="form-control" id="suhu_daging4" name="suhu_daging4"
                                    value="<?= $pem_tumbling->suhu_daging4 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_daging2" class="form-label">Berat Daging 2</label>
                                <input type="text" class="form-control" id="berat_daging2" name="berat_daging2"
                                    value="<?= $pem_tumbling->berat_daging2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging5" class="form-label">Suhu Daging 5</label>
                                <input type="text" class="form-control" id="suhu_daging5" name="suhu_daging5"
                                    value="<?= $pem_tumbling->suhu_daging5 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging6" class="form-label">Suhu Daging 6</label>
                                <input type="text" class="form-control" id="suhu_daging6" name="suhu_daging6"
                                    value="<?= $pem_tumbling->suhu_daging6 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging7" class="form-label">Suhu Daging 7</label>
                                <input type="text" class="form-control" id="suhu_daging7" name="suhu_daging7"
                                    value="<?= $pem_tumbling->suhu_daging7 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging8" class="form-label">Suhu Daging 8</label>
                                <input type="text" class="form-control" id="suhu_daging8" name="suhu_daging8"
                                    value="<?= $pem_tumbling->suhu_daging8 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_daging3" class="form-label">Berat Daging 3</label>
                                <input type="text" class="form-control" id="berat_daging3" name="berat_daging3"
                                    value="<?= $pem_tumbling->berat_daging3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging9" class="form-label">Suhu Daging 9</label>
                                <input type="text" class="form-control" id="suhu_daging9" name="suhu_daging9"
                                    value="<?= $pem_tumbling->suhu_daging9 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging10" class="form-label">Suhu Daging 10</label>
                                <input type="text" class="form-control" id="suhu_daging10" name="suhu_daging10"
                                    value="<?= $pem_tumbling->suhu_daging10 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging11" class="form-label">Suhu Daging 11</label>
                                <input type="text" class="form-control" id="suhu_daging11" name="suhu_daging11"
                                    value="<?= $pem_tumbling->suhu_daging11 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging12" class="form-label">Suhu Daging 12</label>
                                <input type="text" class="form-control" id="suhu_daging12" name="suhu_daging12"
                                    value="<?= $pem_tumbling->suhu_daging12 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="rataratadaging" class="form-label">Rata-Rata Daging</label>
                                <input type="text" class="form-control" id="rataratadaging" name="rataratadaging"
                                    value="<?= $pem_tumbling->rataratadaging ?>">
                            </div>
                            <div class="mb-3">
                                <label for="rataratadaging2" class="form-label">Rata-Rata Daging 2</label>
                                <input type="text" class="form-control" id="rataratadaging2" name="rataratadaging2"
                                    value="<?= $pem_tumbling->rataratadaging2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="rataratadaging3" class="form-label">Rata-Rata Daging 3</label>
                                <input type="text" class="form-control" id="rataratadaging3" name="rataratadaging3"
                                    value="<?= $pem_tumbling->rataratadaging3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kondisi_daging" class="form-label">Kondisi Daging</label>
                                <input type="text" class="form-control" id="kondisi_daging" name="kondisi_daging"
                                    value="<?= $pem_tumbling->kondisi_daging ?>">
                            </div>
                            <div class="mb-3">
                                <label for="bahan_utama" class="form-label">Bahan Utama</label>
                                <input type="text" class="form-control" id="bahan_utama" name="bahan_utama"
                                    value="<?= $pem_tumbling->bahan_utama ?>">
                            </div>
                            <div class="mb-3">
                                <label for="bahan_utama2" class="form-label">Bahan Utama 2</label>
                                <input type="text" class="form-control" id="bahan_utama2" name="bahan_utama2"
                                    value="<?= $pem_tumbling->bahan_utama2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="bahan_utama3" class="form-label">Bahan Utama 3</label>
                                <input type="text" class="form-control" id="bahan_utama3" name="bahan_utama3"
                                    value="<?= $pem_tumbling->bahan_utama3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kode_marinade1" class="form-label">Kode Marinade 1</label>
                                <input type="text" class="form-control" id="kode_marinade1" name="kode_marinade1"
                                    value="<?= $pem_tumbling->kode_marinade1 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kode_marinade2" class="form-label">Kode Marinade 2</label>
                                <input type="text" class="form-control" id="kode_marinade2" name="kode_marinade2"
                                    value="<?= $pem_tumbling->kode_marinade2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kode_marinade3" class="form-label">Kode Marinade 3</label>
                                <input type="text" class="form-control" id="kode_marinade3" name="kode_marinade3"
                                    value="<?= $pem_tumbling->kode_marinade3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kode_marinade4" class="form-label">Kode Marinade 4</label>
                                <input type="text" class="form-control" id="kode_marinade4" name="kode_marinade4"
                                    value="<?= $pem_tumbling->kode_marinade4 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kode_marinade5" class="form-label">Kode Marinade 5</label>
                                <input type="text" class="form-control" id="kode_marinade5" name="kode_marinade5"
                                    value="<?= $pem_tumbling->kode_marinade5 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kode_marinade6" class="form-label">Kode Marinade 6</label>
                                <input type="text" class="form-control" id="kode_marinade6" name="kode_marinade6"
                                    value="<?= $pem_tumbling->kode_marinade6 ?>">
                            </div>

                            <div class="mb-3">
                                <label for="kode_marinade1_s2" class="form-label">Kode Marinade 7</label>
                                <input type="text" class="form-control" id="kode_marinade1_s2" name="kode_marinade1_s2"
                                    value="<?= $pem_tumbling->kode_marinade1_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kode_marinade2_s2" class="form-label">Kode Marinade 8</label>
                                <input type="text" class="form-control" id="kode_marinade2_s2" name="kode_marinade2_s2"
                                    value="<?= $pem_tumbling->kode_marinade2_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kode_marinade3_s2" class="form-label">Kode Marinade 9</label>
                                <input type="text" class="form-control" id="kode_marinade3_s2" name="kode_marinade3_s2"
                                    value="<?= $pem_tumbling->kode_marinade3_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kode_marinade4_s2" class="form-label">Kode Marinade 10</label>
                                <input type="text" class="form-control" id="kode_marinade4_s2" name="kode_marinade4_s2"
                                    value="<?= $pem_tumbling->kode_marinade4_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kode_marinade5_s2" class="form-label">Kode Marinade 11</label>
                                <input type="text" class="form-control" id="kode_marinade5_s2" name="kode_marinade5_s2"
                                    value="<?= $pem_tumbling->kode_marinade5_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kode_marinade6_s2" class="form-label">Kode Marinade 12</label>
                                <input type="text" class="form-control" id="kode_marinade6_s2" name="kode_marinade6_s2"
                                    value="<?= $pem_tumbling->kode_marinade6_s2 ?>">
                            </div>

                            <div class="mb-3">
                                <label for="berat_marinade1" class="form-label">Berat Marinade 1</label>
                                <input type="text" class="form-control" id="berat_marinade1" name="berat_marinade1"
                                    value="<?= $pem_tumbling->berat_marinade1 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_marinade2" class="form-label">Berat Marinade 2</label>
                                <input type="text" class="form-control" id="berat_marinade2" name="berat_marinade2"
                                    value="<?= $pem_tumbling->berat_marinade2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_marinade3" class="form-label">Berat Marinade 3</label>
                                <input type="text" class="form-control" id="berat_marinade3" name="berat_marinade3"
                                    value="<?= $pem_tumbling->berat_marinade3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_marinade4" class="form-label">Berat Marinade 4</label>
                                <input type="text" class="form-control" id="berat_marinade4" name="berat_marinade4"
                                    value="<?= $pem_tumbling->berat_marinade4 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_marinade5" class="form-label">Berat Marinade 5</label>
                                <input type="text" class="form-control" id="berat_marinade5" name="berat_marinade5"
                                    value="<?= $pem_tumbling->berat_marinade5 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_marinade6" class="form-label">Berat Marinade 6</label>
                                <input type="text" class="form-control" id="berat_marinade6" name="berat_marinade6"
                                    value="<?= $pem_tumbling->berat_marinade6 ?>">
                            </div>

                            <div class="mb-3">
                                <label for="berat_marinade1_s2" class="form-label">Berat Marinade 7</label>
                                <input type="text" class="form-control" id="berat_marinade1_s2"
                                    name="berat_marinade1_s2" value="<?= $pem_tumbling->berat_marinade1_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_marinade2_s2" class="form-label">Berat Marinade 8</label>
                                <input type="text" class="form-control" id="berat_marinade2_s2"
                                    name="berat_marinade2_s2" value="<?= $pem_tumbling->berat_marinade2_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_marinade3_s2" class="form-label">Berat Marinade 9</label>
                                <input type="text" class="form-control" id="berat_marinade3_s2"
                                    name="berat_marinade3_s2" value="<?= $pem_tumbling->berat_marinade3_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_marinade4_s2" class="form-label">Berat Marinade 10</label>
                                <input type="text" class="form-control" id="berat_marinade4_s2"
                                    name="berat_marinade4_s2" value="<?= $pem_tumbling->berat_marinade4_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_marinade5_s2" class="form-label">Berat Marinade 11</label>
                                <input type="text" class="form-control" id="berat_marinade5_s2"
                                    name="berat_marinade5_s2" value="<?= $pem_tumbling->berat_marinade5_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_marinade6_s2" class="form-label">Berat Marinade 12</label>
                                <input type="text" class="form-control" id="berat_marinade6_s2"
                                    name="berat_marinade6_s2" value="<?= $pem_tumbling->berat_marinade6_s2 ?>">
                            </div>

                            <div class="mb-3">
                                <label for="bahan_lain1" class="form-label">Bahan Lain 1</label>
                                <input type="text" class="form-control" id="bahan_lain1" name="bahan_lain1"
                                    value="<?= $pem_tumbling->bahan_lain1 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="bahan_lain2" class="form-label">Bahan Lain 2</label>
                                <input type="text" class="form-control" id="bahan_lain2" name="bahan_lain2"
                                    value="<?= $pem_tumbling->bahan_lain2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="bahan_lain3" class="form-label">Bahan Lain 3</label>
                                <input type="text" class="form-control" id="bahan_lain3" name="bahan_lain3"
                                    value="<?= $pem_tumbling->bahan_lain3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="bahan_lain4" class="form-label">Bahan Lain 4</label>
                                <input type="text" class="form-control" id="bahan_lain4" name="bahan_lain4"
                                    value="<?= $pem_tumbling->bahan_lain4 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="bahan_lain5" class="form-label">Bahan Lain 5</label>
                                <input type="text" class="form-control" id="bahan_lain5" name="bahan_lain5"
                                    value="<?= $pem_tumbling->bahan_lain5 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kode_bahan_lain1" class="form-label">Kode Bahan Lain 1</label>
                                <input type="text" class="form-control" id="kode_bahan_lain1" name="kode_bahan_lain1"
                                    value="<?= $pem_tumbling->kode_bahan_lain1 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kode_bahan_lain2" class="form-label">Kode Bahan Lain 2</label>
                                <input type="text" class="form-control" id="kode_bahan_lain2" name="kode_bahan_lain2"
                                    value="<?= $pem_tumbling->kode_bahan_lain2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kode_bahan_lain3" class="form-label">Kode Bahan Lain 3</label>
                                <input type="text" class="form-control" id="kode_bahan_lain3" name="kode_bahan_lain3"
                                    value="<?= $pem_tumbling->kode_bahan_lain3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kode_bahan_lain4" class="form-label">Kode Bahan Lain 4</label>
                                <input type="text" class="form-control" id="kode_bahan_lain4" name="kode_bahan_lain4"
                                    value="<?= $pem_tumbling->kode_bahan_lain4 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kode_bahan_lain5" class="form-label">Kode Bahan Lain 5</label>
                                <input type="text" class="form-control" id="kode_bahan_lain5" name="kode_bahan_lain5"
                                    value="<?= $pem_tumbling->kode_bahan_lain5 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_bahan_lain1" class="form-label">Berat Bahan Lain 1</label>
                                <input type="text" class="form-control" id="berat_bahan_lain1" name="berat_bahan_lain1"
                                    value="<?= $pem_tumbling->berat_bahan_lain1 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_bahan_lain2" class="form-label">Berat Bahan Lain 2</label>
                                <input type="text" class="form-control" id="berat_bahan_lain2" name="berat_bahan_lain2"
                                    value="<?= $pem_tumbling->berat_bahan_lain2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_bahan_lain3" class="form-label">Berat Bahan Lain 3</label>
                                <input type="text" class="form-control" id="berat_bahan_lain3" name="berat_bahan_lain3"
                                    value="<?= $pem_tumbling->berat_bahan_lain3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_bahan_lain4" class="form-label">Berat Bahan Lain 4</label>
                                <input type="text" class="form-control" id="berat_bahan_lain4" name="berat_bahan_lain4"
                                    value="<?= $pem_tumbling->berat_bahan_lain4 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="berat_bahan_lain5" class="form-label">Berat Bahan Lain 5</label>
                                <input type="text" class="form-control" id="berat_bahan_lain5" name="berat_bahan_lain5"
                                    value="<?= $pem_tumbling->berat_bahan_lain5 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="sensor_bahan_lain1" class="form-label">Sensor Bahan Lain 1</label>
                                <input type="text" class="form-control" id="sensor_bahan_lain1"
                                    name="sensor_bahan_lain1" value="<?= $pem_tumbling->sensor_bahan_lain1 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="sensor_bahan_lain2" class="form-label">Sensor Bahan Lain 2</label>
                                <input type="text" class="form-control" id="sensor_bahan_lain2"
                                    name="sensor_bahan_lain2" value="<?= $pem_tumbling->sensor_bahan_lain2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="sensor_bahan_lain3" class="form-label">Sensor Bahan Lain 3</label>
                                <input type="text" class="form-control" id="sensor_bahan_lain3"
                                    name="sensor_bahan_lain3" value="<?= $pem_tumbling->sensor_bahan_lain3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="sensor_bahan_lain4" class="form-label">Sensor Bahan Lain 4</label>
                                <input type="text" class="form-control" id="sensor_bahan_lain4"
                                    name="sensor_bahan_lain4" value="<?= $pem_tumbling->sensor_bahan_lain4 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="sensor_bahan_lain5" class="form-label">Sensor Bahan Lain 5</label>
                                <input type="text" class="form-control" id="sensor_bahan_lain5"
                                    name="sensor_bahan_lain5" value="<?= $pem_tumbling->sensor_bahan_lain5 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="air" class="form-label">Air</label>
                                <input type="text" class="form-control" id="air" name="air"
                                    value="<?= $pem_tumbling->air ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_air" class="form-label">Suhu Air</label>
                                <input type="text" class="form-control" id="suhu_air" name="suhu_air"
                                    value="<?= $pem_tumbling->suhu_air ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_marinade" class="form-label">Suhu Marinade</label>
                                <input type="text" class="form-control" id="suhu_marinade" name="suhu_marinade"
                                    value="<?= $pem_tumbling->suhu_marinade ?>">
                            </div>
                            <div class="mb-3">
                                <label for="lama_pengadukan" class="form-label">Lama Pengadukan</label>
                                <input type="text" class="form-control" id="lama_pengadukan" name="lama_pengadukan"
                                    value="<?= $pem_tumbling->lama_pengadukan ?>">
                            </div>
                            <div class="mb-3">
                                <label for="marinade_brix" class="form-label">Marinade Brix</label>
                                <input type="text" class="form-control" id="marinade_brix" name="marinade_brix"
                                    value="<?= $pem_tumbling->marinade_brix ?>">
                            </div>
                            <div class="mb-3">
                                <label for="drum_on" class="form-label">Drum On</label>
                                <input type="text" class="form-control" id="drum_on" name="drum_on"
                                    value="<?= $pem_tumbling->drum_on ?>">
                            </div>
                            <div class="mb-3">
                                <label for="drum_off" class="form-label">Drum Off</label>
                                <input type="text" class="form-control" id="drum_off" name="drum_off"
                                    value="<?= $pem_tumbling->drum_off ?>">
                            </div>
                            <div class="mb-3">
                                <label for="drum_speed" class="form-label">Drum Speed</label>
                                <input type="text" class="form-control" id="drum_speed" name="drum_speed"
                                    value="<?= $pem_tumbling->drum_speed ?>">
                            </div>
                            <div class="mb-3">
                                <label for="vacuum_time" class="form-label">Vacuum Time</label>
                                <input type="text" class="form-control" id="vacuum_time" name="vacuum_time"
                                    value="<?= $pem_tumbling->vacuum_time ?>">
                            </div>
                            <div class="mb-3">
                                <label for="total_time" class="form-label">Total Time</label>
                                <input type="text" class="form-control" id="total_time" name="total_time"
                                    value="<?= $pem_tumbling->total_time ?>">
                            </div>
                            <div class="mb-3">
                                <label for="mulai" class="form-label">Mulai</label>
                                <input type="text" class="form-control" id="mulai" name="mulai"
                                    value="<?= $pem_tumbling->mulai ?>">
                            </div>
                            <div class="mb-3">
                                <label for="selesai" class="form-label">Selesai</label>
                                <input type="text" class="form-control" id="selesai" name="selesai"
                                    value="<?= $pem_tumbling->selesai ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging_tumbling1" class="form-label">Suhu Daging Tumbling</label>
                                <input type="text" class="form-control" id="suhu_daging_tumbling1"
                                    name="suhu_daging_tumbling1" value="<?= $pem_tumbling->suhu_daging_tumbling1 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging_tumbling2" class="form-label">Suhu Daging Tumbling 2</label>
                                <input type="text" class="form-control" id="suhu_daging_tumbling2"
                                    name="suhu_daging_tumbling2" value="<?= $pem_tumbling->suhu_daging_tumbling2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging_tumbling3" class="form-label">Suhu Daging Tumbling 3</label>
                                <input type="text" class="form-control" id="suhu_daging_tumbling3"
                                    name="suhu_daging_tumbling3" value="<?= $pem_tumbling->suhu_daging_tumbling3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging_tumbling4" class="form-label">Suhu Daging Tumbling 4</label>
                                <input type="text" class="form-control" id="suhu_daging_tumbling4"
                                    name="suhu_daging_tumbling4" value="<?= $pem_tumbling->suhu_daging_tumbling4 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging_tumbling5" class="form-label">Suhu Daging Tumbling 5</label>
                                <input type="text" class="form-control" id="suhu_daging_tumbling5"
                                    name="suhu_daging_tumbling5" value="<?= $pem_tumbling->suhu_daging_tumbling5 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="suhu_daging_tumbling6" class="form-label">Suhu Daging Tumbling 6</label>
                                <input type="text" class="form-control" id="suhu_daging_tumbling6"
                                    name="suhu_daging_tumbling6" value="<?= $pem_tumbling->suhu_daging_tumbling6 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="rataratatumbling" class="form-label">Rata-rata Tumbling</label>
                                <input type="text" class="form-control" id="rataratatumbling" name="rataratatumbling"
                                    value="<?= $pem_tumbling->rataratatumbling ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kondisi" class="form-label">Kondisi</label>
                                <input type="text" class="form-control" id="kondisi" name="kondisi"
                                    value="<?= $pem_tumbling->kondisi ?>">
                            </div>
                            <div class="mb-3">
                                <label for="catatan_kondisi" class="form-label">Catatan Kondisi</label>
                                <input type="text" class="form-control" id="catatan_kondisi" name="catatan_kondisi"
                                    value="<?= $pem_tumbling->catatan_kondisi ?>">
                            </div>
                            <div class="mb-3">
                                <label for="catatan" class="form-label">Catatan</label>
                                <input type="text" class="form-control" id="catatan" name="catatan"
                                    value="<?= $pem_tumbling->catatan ?>">
                            </div>

                            <h5>SECTION 2</h5>
                            <div class="mb-3">
                                <label for="section2_batch_no" class="form-label">Batch No</label>
                                <input type="text" class="form-control" id="section2_batch_no" name="section2_batch_no"
                                    value="<?= $pem_tumbling->section2_batch_no ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_identifikasi_daging" class="form-label">Identifikasi Daging</label>
                                <input type="text" class="form-control" id="section2_identifikasi_daging"
                                    name="section2_identifikasi_daging"
                                    value="<?= $pem_tumbling->section2_identifikasi_daging ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_asal" class="form-label">Asal</label>
                                <input type="text" class="form-control" id="section2_asal" name="section2_asal"
                                    value="<?= $pem_tumbling->section2_asal ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_tanggal_produksi_kode" class="form-label">Tanggal Produksi
                                    Kode</label>
                                <input type="text" class="form-control" id="section2_tanggal_produksi_kode"
                                    name="section2_tanggal_produksi_kode"
                                    value="<?= $pem_tumbling->section2_tanggal_produksi_kode ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_tanggal_produksi_kode2" class="form-label">Tanggal Produksi Kode
                                    2</label>
                                <input type="text" class="form-control" id="section2_tanggal_produksi_kode2"
                                    name="section2_tanggal_produksi_kode2"
                                    value="<?= $pem_tumbling->section2_tanggal_produksi_kode2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_tanggal_produksi_kode3" class="form-label">Tanggal Produksi Kode
                                    3</label>
                                <input type="text" class="form-control" id="section2_tanggal_produksi_kode3"
                                    name="section2_tanggal_produksi_kode3"
                                    value="<?= $pem_tumbling->section2_tanggal_produksi_kode3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_daging" class="form-label">Berat Daging</label>
                                <input type="text" class="form-control" id="section2_berat_daging"
                                    name="section2_berat_daging" value="<?= $pem_tumbling->section2_berat_daging ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging" class="form-label">Suhu Daging</label>
                                <input type="text" class="form-control" id="section2_suhu_daging"
                                    name="section2_suhu_daging" value="<?= $pem_tumbling->section2_suhu_daging ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging2" class="form-label">Suhu Daging 2</label>
                                <input type="text" class="form-control" id="section2_suhu_daging2"
                                    name="section2_suhu_daging2" value="<?= $pem_tumbling->section2_suhu_daging2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging3" class="form-label">Suhu Daging 3</label>
                                <input type="text" class="form-control" id="section2_suhu_daging3"
                                    name="section2_suhu_daging3" value="<?= $pem_tumbling->section2_suhu_daging3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging4" class="form-label">Suhu Daging 4</label>
                                <input type="text" class="form-control" id="section2_suhu_daging4"
                                    name="section2_suhu_daging4" value="<?= $pem_tumbling->section2_suhu_daging4 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_daging2" class="form-label">Berat Daging 2</label>
                                <input type="text" class="form-control" id="section2_berat_daging2"
                                    name="section2_berat_daging2" value="<?= $pem_tumbling->section2_berat_daging2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging5" class="form-label">Suhu Daging 5</label>
                                <input type="text" class="form-control" id="section2_suhu_daging5"
                                    name="section2_suhu_daging5" value="<?= $pem_tumbling->section2_suhu_daging5 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging6" class="form-label">Suhu Daging 6</label>
                                <input type="text" class="form-control" id="section2_suhu_daging6"
                                    name="section2_suhu_daging6" value="<?= $pem_tumbling->section2_suhu_daging6 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging7" class="form-label">Suhu Daging 7</label>
                                <input type="text" class="form-control" id="section2_suhu_daging7"
                                    name="section2_suhu_daging7" value="<?= $pem_tumbling->section2_suhu_daging7 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging8" class="form-label">Suhu Daging 8</label>
                                <input type="text" class="form-control" id="section2_suhu_daging8"
                                    name="section2_suhu_daging8" value="<?= $pem_tumbling->section2_suhu_daging8 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_daging3" class="form-label">Berat Daging 3</label>
                                <input type="text" class="form-control" id="section2_berat_daging3"
                                    name="section2_berat_daging3" value="<?= $pem_tumbling->section2_berat_daging3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging9" class="form-label">Suhu Daging 9</label>
                                <input type="text" class="form-control" id="section2_suhu_daging9"
                                    name="section2_suhu_daging9" value="<?= $pem_tumbling->section2_suhu_daging9 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging10" class="form-label">Suhu Daging 10</label>
                                <input type="text" class="form-control" id="section2_suhu_daging10"
                                    name="section2_suhu_daging10" value="<?= $pem_tumbling->section2_suhu_daging10 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging11" class="form-label">Suhu Daging 11</label>
                                <input type="text" class="form-control" id="section2_suhu_daging11"
                                    name="section2_suhu_daging11" value="<?= $pem_tumbling->section2_suhu_daging11 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging12" class="form-label">Suhu Daging 12</label>
                                <input type="text" class="form-control" id="section2_suhu_daging12"
                                    name="section2_suhu_daging12" value="<?= $pem_tumbling->section2_suhu_daging12 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_rataratadaging" class="form-label">Rata-Rata Daging</label>
                                <input type="text" class="form-control" id="section2_rataratadaging"
                                    name="section2_rataratadaging"
                                    value="<?= $pem_tumbling->section2_rataratadaging ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_rataratadaging2" class="form-label">Rata-Rata Daging 2</label>
                                <input type="text" class="form-control" id="section2_rataratadaging2"
                                    name="section2_rataratadaging2"
                                    value="<?= $pem_tumbling->section2_rataratadaging2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_rataratadaging3" class="form-label">Rata-Rata Daging 3</label>
                                <input type="text" class="form-control" id="section2_rataratadaging3"
                                    name="section2_rataratadaging3"
                                    value="<?= $pem_tumbling->section2_rataratadaging3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kondisi_daging" class="form-label">Kondisi Daging</label>
                                <input type="text" class="form-control" id="section2_kondisi_daging"
                                    name="section2_kondisi_daging"
                                    value="<?= $pem_tumbling->section2_kondisi_daging ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_bahan_utama" class="form-label">Bahan Utama</label>
                                <input type="text" class="form-control" id="section2_bahan_utama"
                                    name="section2_bahan_utama" value="<?= $pem_tumbling->section2_bahan_utama ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_bahan_utama2" class="form-label">Bahan Utama 2</label>
                                <input type="text" class="form-control" id="section2_bahan_utama2"
                                    name="section2_bahan_utama2" value="<?= $pem_tumbling->section2_bahan_utama2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_bahan_utama3" class="form-label">Bahan Utama 3</label>
                                <input type="text" class="form-control" id="section2_bahan_utama3"
                                    name="section2_bahan_utama3" value="<?= $pem_tumbling->section2_bahan_utama3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kode_marinade1" class="form-label">Kode Marinade 1</label>
                                <input type="text" class="form-control" id="section2_kode_marinade1"
                                    name="section2_kode_marinade1"
                                    value="<?= $pem_tumbling->section2_kode_marinade1 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kode_marinade2" class="form-label">Kode Marinade 2</label>
                                <input type="text" class="form-control" id="section2_kode_marinade2"
                                    name="section2_kode_marinade2"
                                    value="<?= $pem_tumbling->section2_kode_marinade2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kode_marinade3" class="form-label">Kode Marinade 3</label>
                                <input type="text" class="form-control" id="section2_kode_marinade3"
                                    name="section2_kode_marinade3"
                                    value="<?= $pem_tumbling->section2_kode_marinade3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kode_marinade4" class="form-label">Kode Marinade 4</label>
                                <input type="text" class="form-control" id="section2_kode_marinade4"
                                    name="section2_kode_marinade4"
                                    value="<?= $pem_tumbling->section2_kode_marinade4 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kode_marinade5" class="form-label">Kode Marinade 5</label>
                                <input type="text" class="form-control" id="section2_kode_marinade5"
                                    name="section2_kode_marinade5"
                                    value="<?= $pem_tumbling->section2_kode_marinade5 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kode_marinade6" class="form-label">Kode Marinade 6</label>
                                <input type="text" class="form-control" id="section2_kode_marinade6"
                                    name="section2_kode_marinade6"
                                    value="<?= $pem_tumbling->section2_kode_marinade6 ?>">
                            </div>

                            <div class="mb-3">
                                <label for="section2_kode_marinade1_s2" class="form-label">Kode Marinade 7</label>
                                <input type="text" class="form-control" id="section2_kode_marinade1_s2"
                                    name="section2_kode_marinade1_s2"
                                    value="<?= $pem_tumbling->section2_kode_marinade1_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kode_marinade2_s2" class="form-label">Kode Marinade 8</label>
                                <input type="text" class="form-control" id="section2_kode_marinade2_s2"
                                    name="section2_kode_marinade2_s2"
                                    value="<?= $pem_tumbling->section2_kode_marinade2_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kode_marinade3_s2" class="form-label">Kode Marinade 9</label>
                                <input type="text" class="form-control" id="section2_kode_marinade3_s2"
                                    name="section2_kode_marinade3_s2"
                                    value="<?= $pem_tumbling->section2_kode_marinade3_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kode_marinade4_s2" class="form-label">Kode Marinade 10</label>
                                <input type="text" class="form-control" id="section2_kode_marinade4_s2"
                                    name="section2_kode_marinade4_s2"
                                    value="<?= $pem_tumbling->section2_kode_marinade4_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kode_marinade5_s2" class="form-label">Kode Marinade 11</label>
                                <input type="text" class="form-control" id="section2_kode_marinade5_s2"
                                    name="section2_kode_marinade5_s2"
                                    value="<?= $pem_tumbling->section2_kode_marinade5_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kode_marinade6_s2" class="form-label">Kode Marinade 12</label>
                                <input type="text" class="form-control" id="section2_kode_marinade6_s2"
                                    name="section2_kode_marinade6_s2"
                                    value="<?= $pem_tumbling->section2_kode_marinade6_s2 ?>">
                            </div>

                            <div class="mb-3">
                                <label for="section2_berat_marinade1" class="form-label">Berat Marinade 1</label>
                                <input type="text" class="form-control" id="section2_berat_marinade1"
                                    name="section2_berat_marinade1"
                                    value="<?= $pem_tumbling->section2_berat_marinade1 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_marinade2" class="form-label">Berat Marinade 2</label>
                                <input type="text" class="form-control" id="section2_berat_marinade2"
                                    name="section2_berat_marinade2"
                                    value="<?= $pem_tumbling->section2_berat_marinade2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_marinade3" class="form-label">Berat Marinade 3</label>
                                <input type="text" class="form-control" id="section2_berat_marinade3"
                                    name="section2_berat_marinade3"
                                    value="<?= $pem_tumbling->section2_berat_marinade3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_marinade4" class="form-label">Berat Marinade 4</label>
                                <input type="text" class="form-control" id="section2_berat_marinade4"
                                    name="section2_berat_marinade4"
                                    value="<?= $pem_tumbling->section2_berat_marinade4 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_marinade5" class="form-label">Berat Marinade 5</label>
                                <input type="text" class="form-control" id="section2_berat_marinade5"
                                    name="section2_berat_marinade5"
                                    value="<?= $pem_tumbling->section2_berat_marinade5 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_marinade6" class="form-label">Berat Marinade 6</label>
                                <input type="text" class="form-control" id="section2_berat_marinade6"
                                    name="section2_berat_marinade6"
                                    value="<?= $pem_tumbling->section2_berat_marinade6 ?>">
                            </div>

                            <div class="mb-3">
                                <label for="section2_berat_marinade1_s2" class="form-label">Berat Marinade 7</label>
                                <input type="text" class="form-control" id="section2_berat_marinade1_s2"
                                    name="section2_berat_marinade1_s2"
                                    value="<?= $pem_tumbling->section2_berat_marinade1_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_marinade2_s2" class="form-label">Berat Marinade 8</label>
                                <input type="text" class="form-control" id="section2_berat_marinade2_s2"
                                    name="section2_berat_marinade2_s2"
                                    value="<?= $pem_tumbling->section2_berat_marinade2_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_marinade3_s2" class="form-label">Berat Marinade 9</label>
                                <input type="text" class="form-control" id="section2_berat_marinade3_s2"
                                    name="section2_berat_marinade3_s2"
                                    value="<?= $pem_tumbling->section2_berat_marinade3_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_marinade4_s2" class="form-label">Berat Marinade 10</label>
                                <input type="text" class="form-control" id="section2_berat_marinade4_s2"
                                    name="section2_berat_marinade4_s2"
                                    value="<?= $pem_tumbling->section2_berat_marinade4_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_marinade5_s2" class="form-label">Berat Marinade 11</label>
                                <input type="text" class="form-control" id="section2_berat_marinade5_s2"
                                    name="section2_berat_marinade5_s2"
                                    value="<?= $pem_tumbling->section2_berat_marinade5_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_marinade6_s2" class="form-label">Berat Marinade 12</label>
                                <input type="text" class="form-control" id="section2_berat_marinade6_s2"
                                    name="section2_berat_marinade6_s2"
                                    value="<?= $pem_tumbling->section2_berat_marinade6_s2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_sensor_bahan_lain1" class="form-label">Sensor Bahan Lain 1</label>
                                <input type="text" class="form-control" id="section2_sensor_bahan_lain1"
                                    name="section2_sensor_bahan_lain1"
                                    value="<?= $pem_tumbling->section2_sensor_bahan_lain1 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_sensor_bahan_lain2" class="form-label">Sensor Bahan Lain 2</label>
                                <input type="text" class="form-control" id="section2_sensor_bahan_lain2"
                                    name="section2_sensor_bahan_lain2"
                                    value="<?= $pem_tumbling->section2_sensor_bahan_lain2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_sensor_bahan_lain3" class="form-label">Sensor Bahan Lain 3</label>
                                <input type="text" class="form-control" id="section2_sensor_bahan_lain3"
                                    name="section2_sensor_bahan_lain3"
                                    value="<?= $pem_tumbling->section2_sensor_bahan_lain3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_sensor_bahan_lain4" class="form-label">Sensor Bahan Lain 4</label>
                                <input type="text" class="form-control" id="section2_sensor_bahan_lain4"
                                    name="section2_sensor_bahan_lain4"
                                    value="<?= $pem_tumbling->section2_sensor_bahan_lain4 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_sensor_bahan_lain5" class="form-label">Sensor Bahan Lain 5</label>
                                <input type="text" class="form-control" id="section2_sensor_bahan_lain5"
                                    name="section2_sensor_bahan_lain5"
                                    value="<?= $pem_tumbling->section2_sensor_bahan_lain5 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kode_bahan_lain1" class="form-label">Kode Bahan Lain 1</label>
                                <input type="text" class="form-control" id="section2_kode_bahan_lain1"
                                    name="section2_kode_bahan_lain1"
                                    value="<?= $pem_tumbling->section2_kode_bahan_lain1 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kode_bahan_lain2" class="form-label">Kode Bahan Lain 2</label>
                                <input type="text" class="form-control" id="section2_kode_bahan_lain2"
                                    name="section2_kode_bahan_lain2"
                                    value="<?= $pem_tumbling->section2_kode_bahan_lain2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kode_bahan_lain3" class="form-label">Kode Bahan Lain 3</label>
                                <input type="text" class="form-control" id="section2_kode_bahan_lain3"
                                    name="section2_kode_bahan_lain3"
                                    value="<?= $pem_tumbling->section2_kode_bahan_lain3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kode_bahan_lain4" class="form-label">Kode Bahan Lain 4</label>
                                <input type="text" class="form-control" id="section2_kode_bahan_lain4"
                                    name="section2_kode_bahan_lain4"
                                    value="<?= $pem_tumbling->section2_kode_bahan_lain4 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kode_bahan_lain5" class="form-label">Kode Bahan Lain 5</label>
                                <input type="text" class="form-control" id="section2_kode_bahan_lain5"
                                    name="section2_kode_bahan_lain5"
                                    value="<?= $pem_tumbling->section2_kode_bahan_lain5 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_bahan_lain1" class="form-label">Berat Bahan Lain 1</label>
                                <input type="text" class="form-control" id="section2_berat_bahan_lain1"
                                    name="section2_berat_bahan_lain1"
                                    value="<?= $pem_tumbling->section2_berat_bahan_lain1 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_bahan_lain2" class="form-label">Berat Bahan Lain 2</label>
                                <input type="text" class="form-control" id="section2_berat_bahan_lain2"
                                    name="section2_berat_bahan_lain2"
                                    value="<?= $pem_tumbling->section2_berat_bahan_lain2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_bahan_lain3" class="form-label">Berat Bahan Lain 3</label>
                                <input type="text" class="form-control" id="section2_berat_bahan_lain3"
                                    name="section2_berat_bahan_lain3"
                                    value="<?= $pem_tumbling->section2_berat_bahan_lain3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_bahan_lain4" class="form-label">Berat Bahan Lain 4</label>
                                <input type="text" class="form-control" id="section2_berat_bahan_lain4"
                                    name="section2_berat_bahan_lain4"
                                    value="<?= $pem_tumbling->section2_berat_bahan_lain4 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_berat_bahan_lain5" class="form-label">Berat Bahan Lain 5</label>
                                <input type="text" class="form-control" id="section2_berat_bahan_lain5"
                                    name="section2_berat_bahan_lain5"
                                    value="<?= $pem_tumbling->section2_berat_bahan_lain5 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_sensor_bahan_lain1" class="form-label">Sensor Bahan Lain 1</label>
                                <input type="text" class="form-control" id="section2_sensor_bahan_lain1"
                                    name="section2_sensor_bahan_lain1"
                                    value="<?= $pem_tumbling->section2_sensor_bahan_lain1 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_sensor_bahan_lain2" class="form-label">Sensor Bahan Lain 2</label>
                                <input type="text" class="form-control" id="section2_sensor_bahan_lain2"
                                    name="section2_sensor_bahan_lain2"
                                    value="<?= $pem_tumbling->section2_sensor_bahan_lain2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_sensor_bahan_lain3" class="form-label">Sensor Bahan Lain 3</label>
                                <input type="text" class="form-control" id="section2_sensor_bahan_lain3"
                                    name="section2_sensor_bahan_lain3"
                                    value="<?= $pem_tumbling->section2_sensor_bahan_lain3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_sensor_bahan_lain4" class="form-label">Sensor Bahan Lain 4</label>
                                <input type="text" class="form-control" id="section2_sensor_bahan_lain4"
                                    name="section2_sensor_bahan_lain4"
                                    value="<?= $pem_tumbling->section2_sensor_bahan_lain4 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_sensor_bahan_lain5" class="form-label">Sensor Bahan Lain 5</label>
                                <input type="text" class="form-control" id="section2_sensor_bahan_lain5"
                                    name="section2_sensor_bahan_lain5"
                                    value="<?= $pem_tumbling->section2_sensor_bahan_lain5 ?>">
                            </div>

                            <div class="mb-3">
                                <label for="section2_air" class="form-label">Air</label>
                                <input type="text" class="form-control" id="section2_air" name="section2_air"
                                    value="<?= $pem_tumbling->section2_air ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_air" class="form-label">Suhu Air</label>
                                <input type="text" class="form-control" id="section2_suhu_air" name="section2_suhu_air"
                                    value="<?= $pem_tumbling->section2_suhu_air ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_marinade" class="form-label">Suhu Marinade</label>
                                <input type="text" class="form-control" id="section2_suhu_marinade"
                                    name="section2_suhu_marinade" value="<?= $pem_tumbling->section2_suhu_marinade ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_lama_pengadukan" class="form-label">Lama Pengadukan</label>
                                <input type="text" class="form-control" id="section2_lama_pengadukan"
                                    name="section2_lama_pengadukan"
                                    value="<?= $pem_tumbling->section2_lama_pengadukan ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_marinade_brix" class="form-label">Marinade Brix</label>
                                <input type="text" class="form-control" id="section2_marinade_brix"
                                    name="section2_marinade_brix" value="<?= $pem_tumbling->section2_marinade_brix ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_drum_on" class="form-label">Drum On</label>
                                <input type="text" class="form-control" id="section2_drum_on" name="section2_drum_on"
                                    value="<?= $pem_tumbling->section2_drum_on ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_drum_off" class="form-label">Drum Off</label>
                                <input type="text" class="form-control" id="section2_drum_off" name="section2_drum_off"
                                    value="<?= $pem_tumbling->section2_drum_off ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_drum_speed" class="form-label">Drum Speed</label>
                                <input type="text" class="form-control" id="section2_drum_speed"
                                    name="section2_drum_speed" value="<?= $pem_tumbling->section2_drum_speed ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_vacuum_time" class="form-label">Vacuum Time</label>
                                <input type="text" class="form-control" id="section2_vacuum_time"
                                    name="section2_vacuum_time" value="<?= $pem_tumbling->section2_vacuum_time ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_total_time" class="form-label">Total Time</label>
                                <input type="text" class="form-control" id="section2_total_time"
                                    name="section2_total_time" value="<?= $pem_tumbling->section2_total_time ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_mulai" class="form-label">Mulai</label>
                                <input type="text" class="form-control" id="section2_mulai" name="section2_mulai"
                                    value="<?= $pem_tumbling->section2_mulai ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_selesai" class="form-label">Selesai</label>
                                <input type="text" class="form-control" id="section2_selesai" name="section2_selesai"
                                    value="<?= $pem_tumbling->section2_selesai ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging_tumbling1" class="form-label">Suhu Daging
                                    Tumbling</label>
                                <input type="text" class="form-control" id="section2_suhu_daging_tumbling1"
                                    name="section2_suhu_daging_tumbling1"
                                    value="<?= $pem_tumbling->section2_suhu_daging_tumbling1 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging_tumbling2" class="form-label">Suhu Daging Tumbling
                                    2</label>
                                <input type="text" class="form-control" id="section2_suhu_daging_tumbling2"
                                    name="section2_suhu_daging_tumbling2"
                                    value="<?= $pem_tumbling->section2_suhu_daging_tumbling2 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging_tumbling3" class="form-label">Suhu Daging Tumbling
                                    3</label>
                                <input type="text" class="form-control" id="section2_suhu_daging_tumbling3"
                                    name="section2_suhu_daging_tumbling3"
                                    value="<?= $pem_tumbling->section2_suhu_daging_tumbling3 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging_tumbling4" class="form-label">Suhu Daging Tumbling
                                    4</label>
                                <input type="text" class="form-control" id="section2_suhu_daging_tumbling4"
                                    name="section2_suhu_daging_tumbling4"
                                    value="<?= $pem_tumbling->section2_suhu_daging_tumbling4 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging_tumbling5" class="form-label">Suhu Daging Tumbling
                                    5</label>
                                <input type="text" class="form-control" id="section2_suhu_daging_tumbling5"
                                    name="section2_suhu_daging_tumbling5"
                                    value="<?= $pem_tumbling->section2_suhu_daging_tumbling5 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_daging_tumbling6" class="form-label">Suhu Daging Tumbling
                                    6</label>
                                <input type="text" class="form-control" id="section2_suhu_daging_tumbling6"
                                    name="section2_suhu_daging_tumbling6"
                                    value="<?= $pem_tumbling->section2_suhu_daging_tumbling6 ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_rataratatumbling" class="form-label">Rata-rata Tumbling</label>
                                <input type="text" class="form-control" id="section2_rataratatumbling"
                                    name="section2_rataratatumbling"
                                    value="<?= $pem_tumbling->section2_rataratatumbling ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_kondisi" class="form-label">Kondisi</label>
                                <input type="text" class="form-control" id="section2_kondisi" name="section2_kondisi"
                                    value="<?= $pem_tumbling->section2_kondisi ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_catatan_kondisi" class="form-label">Catatan Kondisi</label>
                                <input type="text" class="form-control" id="section2_catatan_kondisi"
                                    name="section2_catatan_kondisi"
                                    value="<?= $pem_tumbling->section2_catatan_kondisi ?>">
                            </div>
                            <div class="mb-3">
                                <label for="section2_catatan" class="form-label">Catatan</label>
                                <input type="text" class="form-control" id="section2_catatan" name="section2_catatan"
                                    value="<?= $pem_tumbling->section2_catatan ?>">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= base_url('pem_tumbling') ?>" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    <!-- / Content -->
</div>