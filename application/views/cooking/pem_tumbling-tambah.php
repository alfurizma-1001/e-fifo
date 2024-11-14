<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Form Cooking /</span> Tambah</h4>
        <div class="card">
            <h5 class="card-header">Tambah</h5>
            <div class="card-body">
                <form action="<?= base_url('pem_tumbling/tambah') ?>" method="post">
                    <h5>SECTION 1</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="date" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="mb-3">
                                <label for="shift" class="form-label">Shift</label>
                                <input type="text" class="form-control" id="shift" name="shift"
                                    placeholder="Masukkan Shift" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama_produk" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                                    placeholder="Masukkan Nama Produk" required>
                            </div>
                            <div class="mb-3">
                                <label for="batch_no" class="form-label">Batch No. </label>
                                <input type="text" class="form-control" id="batch_no" name="batch_no"
                                    placeholder="Masukkan kode batch_no" required>
                            </div>
                            <div class="mb-3">
                                <label for="identifikasi_daging" class="form-label">Identifikasi Daging</label>
                                <input type="text" class="form-control" id="identifikasi_daging"
                                    name="identifikasi_daging" placeholder="Masukkan identifikasi_daging..." required>
                            </div>
                            <div class="mb-3">
                                <label for="asal" class="form-label">Asal</label>
                                <input type="text" class="form-control" id="asal" name="asal"
                                    placeholder="Masukkan asal..." required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_produksi_kode" class="form-label">Tanggal Produksi/Kode</label>
                                <input type="text" class="form-control" id="tanggal_produksi_kode"
                                    name="tanggal_produksi_kode" placeholder="Masukkan tanggal_produksi atau kode..."
                                    required>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Input Daging and Suhu (Set 1)
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <!-- Form Fields Inside the Accordion -->
                                            <div class="mb-3">
                                                <label for="berat_daging" class="form-label">Berat Daging (Set
                                                    1)</label>
                                                <input type="text" class="form-control" id="berat_daging"
                                                    name="berat_daging" placeholder="Masukkan berat (Set 1)..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="suhu_daging" class="form-label">Suhu Daging (Set 1)</label>
                                                <input type="text" class="form-control" id="suhu_daging"
                                                    name="suhu_daging" placeholder="Masukkan suhu_daging (Set 1)..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="suhu_daging2" class="form-label">Suhu Daging (Set 1)</label>
                                                <input type="text" class="form-control" id="suhu_daging2"
                                                    name="suhu_daging2" placeholder="Masukkan suhu_daging (Set 1)..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="suhu_daging3" class="form-label">Suhu Daging (Set 1)</label>
                                                <input type="text" class="form-control" id="suhu_daging3"
                                                    name="suhu_daging3" placeholder="Masukkan suhu_daging (Set 1)..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="suhu_daging4" class="form-label">Suhu Daging (Set 1)</label>
                                                <input type="text" class="form-control" id="suhu_daging4"
                                                    name="suhu_daging4" placeholder="Masukkan suhu_daging (Set 1)..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="rataratadaging" class="form-label">Rata-rata (Set 1)</label>
                                                <input type="text" class="form-control" id="rataratadaging"
                                                    name="rataratadaging" placeholder="Masukkan Rata-rata (Set 1)..."
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_produksi_kode2" class="form-label">Tanggal Produksi/Kode (Set
                                    2)</label>
                                <input type="text" class="form-control" id="tanggal_produksi_kode2"
                                    name="tanggal_produksi_kode2" placeholder="Masukkan tanggal_produksi atau kode2..."
                                    required>
                            </div>
                            <div class="accordion" id="accordionExample2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            Input Daging and Suhu (Set 2)
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse show"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <!-- Form Fields Inside the Accordion -->
                                            <div class="mb-3">
                                                <label for="berat_daging2" class="form-label">Berat Daging (Set
                                                    2)</label>
                                                <input type="text" class="form-control" id="berat_daging2"
                                                    name="berat_daging2" placeholder="Masukkan berat daging (Set 2)..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="suhu_daging5" class="form-label">Suhu Daging (Set 2)</label>
                                                <input type="text" class="form-control" id="suhu_daging5"
                                                    name="suhu_daging5" placeholder="Masukkan suhu_daging (Set 2)..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="suhu_daging6" class="form-label">Suhu Daging (Set 2)</label>
                                                <input type="text" class="form-control" id="suhu_daging6"
                                                    name="suhu_daging6" placeholder="Masukkan suhu_daging (Set 2)..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="suhu_daging7" class="form-label">Suhu Daging (Set 2)</label>
                                                <input type="text" class="form-control" id="suhu_daging7"
                                                    name="suhu_daging7" placeholder="Masukkan suhu_daging (Set 2)..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="suhu_daging8" class="form-label">Suhu Daging (Set 2)</label>
                                                <input type="text" class="form-control" id="suhu_daging8"
                                                    name="suhu_daging8" placeholder="Masukkan suhu_daging (Set 2)..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="rataratadaging2" class="form-label">Rata-rata (Set
                                                    2)</label>
                                                <input type="text" class="form-control" id="rataratadaging2"
                                                    name="rataratadaging2" placeholder="Masukkan Rata-rata (Set 2)..."
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_produksi_kode3" class="form-label">Tanggal Produksi/Kode (Set
                                    3)</label>
                                <input type="text" class="form-control" id="tanggal_produksi_kode3"
                                    name="tanggal_produksi_kode3" placeholder="Masukkan tanggal_produksi atau kode3..."
                                    required>
                            </div>
                            <div class="accordion" id="accordionExample3">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            Input Daging and Suhu (Set 3)
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse show"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <!-- Form Fields Inside the Accordion -->
                                            <div class="mb-3">
                                                <label for="berat_daging3" class="form-label">Berat Daging (Set
                                                    3)</label>
                                                <input type="text" class="form-control" id="berat_daging3"
                                                    name="berat_daging3" placeholder="Masukkan berat daging (Set 3)..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="suhu_daging9" class="form-label">Suhu Daging (Set 3)</label>
                                                <input type="text" class="form-control" id="suhu_daging9"
                                                    name="suhu_daging9" placeholder="Masukkan suhu_daging (Set 3)..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="suhu_daging10" class="form-label">Suhu Daging (Set
                                                    3)</label>
                                                <input type="text" class="form-control" id="suhu_daging10"
                                                    name="suhu_daging10" placeholder="Masukkan suhu_daging (Set 3)..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="suhu_daging11" class="form-label">Suhu Daging (Set
                                                    3)</label>
                                                <input type="text" class="form-control" id="suhu_daging11"
                                                    name="suhu_daging11" placeholder="Masukkan suhu_daging (Set 3)..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="suhu_daging12" class="form-label">Suhu Daging (Set
                                                    3)</label>
                                                <input type="text" class="form-control" id="suhu_daging12"
                                                    name="suhu_daging12" placeholder="Masukkan suhu_daging (Set 3)..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="rataratadaging3" class="form-label">Rata-rata (Set
                                                    3)</label>
                                                <input type="text" class="form-control" id="rataratadaging3"
                                                    name="rataratadaging3" placeholder="Masukkan Rata-rata (Set 3)..."
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="kondisi_daging" class="form-label">Kondisi Daging</label>
                                <input type="text" class="form-control" id="kondisi_daging" name="kondisi_daging"
                                    placeholder="Masukkan kondisi_daging..." required>
                            </div>
                            <!-- ------------------------------------------------------------------------------- -->
                            <h5 class="card-header">MARINADE</h5>
                            <div class="accordion" id="accordionExample3">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            Input Bahan Utama, Kode dan Marinade (Set 1)
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse show"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <!-- Form Fields Inside the Accordion -->
                                            <div class="mb-3">
                                                <label for="bahan_utama" class="form-label">Bahan Utama (set 1)</label>
                                                <input type="text" class="form-control" id="bahan_utama"
                                                    name="bahan_utama" placeholder="Masukkan bahan_utama..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kode_marinade1" class="form-label">Kode marinade 1 (set
                                                    1)</label>
                                                <input type="text" class="form-control" id="kode_marinade1"
                                                    name="kode_marinade1" placeholder="Masukkan Kode..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kode_marinade2" class="form-label">Kode marinade 2 (set
                                                    1)</label>
                                                <input type="text" class="form-control" id="kode_marinade2"
                                                    name="kode_marinade2" placeholder="Masukkan Kode..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_marinade1" class="form-label">Berat marinade 1 (set
                                                    1)</label>
                                                <input type="text" class="form-control" id="berat_marinade1"
                                                    name="berat_marinade1" placeholder="Masukkan Berat..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_marinade2" class="form-label">Berat marinade 2 (set
                                                    1)</label>
                                                <input type="text" class="form-control" id="berat_marinade2"
                                                    name="berat_marinade2" placeholder="Masukkan Berat..." required>
                                            </div>
                                            <!-- ---------------------------------------------------------------- -->
                                            <div class="mb-3">
                                                <label for="kode_marinade1_s2" class="form-label">Kode marinade 3 (set
                                                    1)</label>
                                                <input type="text" class="form-control" id="kode_marinade1_s2"
                                                    name="kode_marinade1_s2" placeholder="Masukkan Kode..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kode_marinade2_s2" class="form-label">Kode marinade 4 (set
                                                    1)</label>
                                                <input type="text" class="form-control" id="kode_marinade2_s2"
                                                    name="kode_marinade2_s2" placeholder="Masukkan Kode..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_marinade1_s2" class="form-label">Berat marinade 3 (set
                                                    1)</label>
                                                <input type="text" class="form-control" id="berat_marinade1_s2"
                                                    name="berat_marinade1_s2" placeholder="Masukkan Berat..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_marinade2_s2" class="form-label">Berat marinade 4 (set
                                                    1)</label>
                                                <input type="text" class="form-control" id="berat_marinade2_s2"
                                                    name="berat_marinade2_s2" placeholder="Masukkan Berat..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionExample4">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="true"
                                            aria-controls="collapseFour">
                                            Input Bahan Utama, Kode dan Marinade (Set 2)
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse show"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body">
                                            <!-- Form Fields Inside the Accordion -->
                                            <div class="mb-3">
                                                <label for="bahan_utama2" class="form-label">Bahan Utama (set 2)</label>
                                                <input type="text" class="form-control" id="bahan_utama2"
                                                    name="bahan_utama2" placeholder="Masukkan bahan_utama2..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kode_marinade3" class="form-label">Kode marinade 1 (set
                                                    2)</label>
                                                <input type="text" class="form-control" id="kode_marinade3"
                                                    name="kode_marinade3" placeholder="Masukkan Kode..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kode_marinade4" class="form-label">Kode marinade 2 (set
                                                    2)</label>
                                                <input type="text" class="form-control" id="kode_marinade4"
                                                    name="kode_marinade4" placeholder="Masukkan Kode..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_marinade3" class="form-label">Berat marinade 1 (set
                                                    2)</label>
                                                <input type="text" class="form-control" id="berat_marinade3"
                                                    name="berat_marinade3" placeholder="Masukkan Berat..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_marinade4" class="form-label">Berat marinade 2 (set
                                                    2)</label>
                                                <input type="text" class="form-control" id="berat_marinade4"
                                                    name="berat_marinade4" placeholder="Masukkan Berat..." required>
                                            </div>
                                            <!-- ---------------------------------------------------------------- -->
                                            <div class="mb-3">
                                                <label for="kode_marinade3_s2" class="form-label">Kode marinade 3 (set
                                                    2)</label>
                                                <input type="text" class="form-control" id="kode_marinade3_s2"
                                                    name="kode_marinade3_s2" placeholder="Masukkan Kode..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kode_marinade4_s2" class="form-label">Kode marinade 4 (set
                                                    2)</label>
                                                <input type="text" class="form-control" id="kode_marinade4_s2"
                                                    name="kode_marinade4_s2" placeholder="Masukkan Kode..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_marinade3_s2" class="form-label">Berat marinade 3 (set
                                                    2)</label>
                                                <input type="text" class="form-control" id="berat_marinade3_s2"
                                                    name="berat_marinade3_s2" placeholder="Masukkan Berat..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_marinade4_s2" class="form-label">Berat marinade 4 (set
                                                    2)</label>
                                                <input type="text" class="form-control" id="berat_marinade4_s2"
                                                    name="berat_marinade4_s2" placeholder="Masukkan Berat..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Bahan Utama & Marinade (Set 3)
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="bahan_utama3" class="form-label">Bahan Utama (set 3)</label>
                                                <input type="text" class="form-control" id="bahan_utama3"
                                                    name="bahan_utama3" placeholder="Masukkan bahan_utama3..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kode_marinade5" class="form-label">Kode marinade 1 (set
                                                    3)</label>
                                                <input type="text" class="form-control" id="kode_marinade5"
                                                    name="kode_marinade5" placeholder="Masukkan Kode..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kode_marinade6" class="form-label">Kode marinade 2 (set
                                                    3)</label>
                                                <input type="text" class="form-control" id="kode_marinade6"
                                                    name="kode_marinade6" placeholder="Masukkan Kode..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_marinade5" class="form-label">Berat marinade 1 (set
                                                    3)</label>
                                                <input type="text" class="form-control" id="berat_marinade5"
                                                    name="berat_marinade5" placeholder="Masukkan Berat..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_marinade6" class="form-label">Berat marinade 2 (set
                                                    3)</label>
                                                <input type="text" class="form-control" id="berat_marinade6"
                                                    name="berat_marinade6" placeholder="Masukkan Berat..." required>
                                            </div>
                                            <!-- ---------------------------------------------------------------- -->
                                            <div class="mb-3">
                                                <label for="kode_marinade5_s2" class="form-label">Kode marinade 3 (set
                                                    3)</label>
                                                <input type="text" class="form-control" id="kode_marinade5_s2"
                                                    name="kode_marinade5_s2" placeholder="Masukkan Kode..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kode_marinade6_s2" class="form-label">Kode marinade 4 (set
                                                    3)</label>
                                                <input type="text" class="form-control" id="kode_marinade6_s2"
                                                    name="kode_marinade6_s2" placeholder="Masukkan Kode..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_marinade5_s2" class="form-label">Berat marinade 3 (set
                                                    3)</label>
                                                <input type="text" class="form-control" id="berat_marinade5_s2"
                                                    name="berat_marinade5_s2" placeholder="Masukkan Berat..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_marinade6_s2" class="form-label">Berat marinade 4 (set
                                                    3)</label>
                                                <input type="text" class="form-control" id="berat_marinade6_s2"
                                                    name="berat_marinade6_s2" placeholder="Masukkan Berat..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="col-md-6">
                            <h5 class="card-header">BAHAN LAIN YANG DITAMBAHKAN</h5>
                            <div class="accordion" id="accordionBahanLain">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingBahanLain">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseBahanLain" aria-expanded="true"
                                            aria-controls="collapseBahanLain">
                                            Bahan Lain 1 Details
                                        </button>
                                    </h2>
                                    <div id="collapseBahanLain" class="accordion-collapse collapse show"
                                        aria-labelledby="headingBahanLain" data-bs-parent="#accordionBahanLain">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="bahan_lain1" class="form-label">Bahan Lain 1</label>
                                                <input type="text" class="form-control" id="bahan_lain1"
                                                    name="bahan_lain1" placeholder="Masukkan Bahan Lain..."
                                                    oninput="syncInput('bahan_lain1', 'section2_bahan_lain1')" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kode_bahan_lain1" class="form-label">Kode Bahan Lain
                                                    1</label>
                                                <input type="text" class="form-control" id="kode_bahan_lain1"
                                                    name="kode_bahan_lain1" placeholder="Masukkan kode..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_bahan_lain1" class="form-label">Berat Bahan Lain
                                                    1</label>
                                                <input type="text" class="form-control" id="berat_bahan_lain1"
                                                    name="berat_bahan_lain1" placeholder="Masukkan berat..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="sensor_bahan_lain1" class="form-label">sensor Bahan Lain
                                                    1</label>
                                                <select class="form-select" id="sensor_bahan_lain1"
                                                    name="sensor_bahan_lain1" required>
                                                    <option value="" disabled selected>Pilih Status</option>
                                                    <option value="Checked">Checked</option>
                                                    <option value="Not Checked">Not Checked</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionBahanLain2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingBahanLain2">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseBahanLain2" aria-expanded="true"
                                            aria-controls="collapseBahanLain2">
                                            Bahan Lain 2 Details
                                        </button>
                                    </h2>
                                    <div id="collapseBahanLain2" class="accordion-collapse collapse show"
                                        aria-labelledby="headingBahanLain2" data-bs-parent="#accordionBahanLain2">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="bahan_lain2" class="form-label">Bahan Lain 2</label>
                                                <input type="text" class="form-control" id="bahan_lain2"
                                                    name="bahan_lain2" placeholder="Masukkan Bahan Lain 2..."
                                                    oninput="syncInput('bahan_lain2', 'section2_bahan_lain2')" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kode_bahan_lain2" class="form-label">Kode Bahan Lain
                                                    2</label>
                                                <input type="text" class="form-control" id="kode_bahan_lain2"
                                                    name="kode_bahan_lain2" placeholder="Masukkan kode..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_bahan_lain2" class="form-label">Berat Bahan Lain
                                                    2</label>
                                                <input type="text" class="form-control" id="berat_bahan_lain2"
                                                    name="berat_bahan_lain2" placeholder="Masukkan berat..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="sensor_bahan_lain2" class="form-label">sensor Bahan Lain
                                                    2</label>
                                                <select class="form-select" id="sensor_bahan_lain2"
                                                    name="sensor_bahan_lain2" required>
                                                    <option value="" disabled selected>Pilih Status</option>
                                                    <option value="Checked">Checked</option>
                                                    <option value="Not Checked">Not Checked</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion" id="accordionBahanLain3">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingBahanLain3">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseBahanLain3" aria-expanded="true"
                                            aria-controls="collapseBahanLain3">
                                            Bahan Lain 3 Details
                                        </button>
                                    </h2>
                                    <div id="collapseBahanLain3" class="accordion-collapse collapse show"
                                        aria-labelledby="headingBahanLain3" data-bs-parent="#accordionBahanLain3">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="bahan_lain3" class="form-label">Bahan Lain 3</label>
                                                <input type="text" class="form-control" id="bahan_lain3"
                                                    name="bahan_lain3" placeholder="Masukkan Bahan Lain 3..."
                                                    oninput="syncInput('bahan_lain3', 'section2_bahan_lain3')" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kode_bahan_lain3" class="form-label">Kode Bahan Lain
                                                    3</label>
                                                <input type="text" class="form-control" id="kode_bahan_lain3"
                                                    name="kode_bahan_lain3" placeholder="Masukkan kode..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_bahan_lain3" class="form-label">Berat Bahan Lain
                                                    3</label>
                                                <input type="text" class="form-control" id="berat_bahan_lain3"
                                                    name="berat_bahan_lain3" placeholder="Masukkan berat..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="sensor_bahan_lain3" class="form-label">sensor Bahan Lain
                                                    3</label>
                                                <select class="form-select" id="sensor_bahan_lain3"
                                                    name="sensor_bahan_lain3" required>
                                                    <option value="" disabled selected>Pilih Status</option>
                                                    <option value="Checked">Checked</option>
                                                    <option value="Not Checked">Not Checked</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionBahanLain4">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingBahanLain4">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseBahanLain4" aria-expanded="true"
                                            aria-controls="collapseBahanLain4">
                                            Bahan Lain 4 Details
                                        </button>
                                    </h2>
                                    <div id="collapseBahanLain4" class="accordion-collapse collapse show"
                                        aria-labelledby="headingBahanLain4" data-bs-parent="#accordionBahanLain4">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="bahan_lain4" class="form-label">Bahan Lain 4</label>
                                                <input type="text" class="form-control" id="bahan_lain4"
                                                    name="bahan_lain4" placeholder="Masukkan Bahan Lain 4..."
                                                    oninput="syncInput('bahan_lain4', 'section2_bahan_lain4')" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kode_bahan_lain4" class="form-label">Kode Bahan Lain
                                                    4</label>
                                                <input type="text" class="form-control" id="kode_bahan_lain4"
                                                    name="kode_bahan_lain4" placeholder="Masukkan kode..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_bahan_lain4" class="form-label">Berat Bahan Lain
                                                    4</label>
                                                <input type="text" class="form-control" id="berat_bahan_lain4"
                                                    name="berat_bahan_lain4" placeholder="Masukkan berat..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="sensor_bahan_lain4" class="form-label">sensor Bahan Lain
                                                    4</label>
                                                <select class="form-select" id="sensor_bahan_lain4"
                                                    name="sensor_bahan_lain4" required>
                                                    <option value="" disabled selected>Pilih Status</option>
                                                    <option value="Checked">Checked</option>
                                                    <option value="Not Checked">Not Checked</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionBahanLain5">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingBahanLain5">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseBahanLain5" aria-expanded="true"
                                            aria-controls="collapseBahanLain5">
                                            Bahan Lain 5 Details
                                        </button>
                                    </h2>
                                    <div id="collapseBahanLain5" class="accordion-collapse collapse show"
                                        aria-labelledby="headingBahanLain5" data-bs-parent="#accordionBahanLain5">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="bahan_lain5" class="form-label">Bahan Lain 5</label>
                                                <input type="text" class="form-control" id="bahan_lain5"
                                                    name="bahan_lain5" placeholder="Masukkan Bahan Lain 5..."
                                                    oninput="syncInput('bahan_lain5', 'section2_bahan_lain5')" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="kode_bahan_lain5" class="form-label">Kode Bahan Lain
                                                    5</label>
                                                <input type="text" class="form-control" id="kode_bahan_lain5"
                                                    name="kode_bahan_lain5" placeholder="Masukkan kode..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="berat_bahan_lain5" class="form-label">Berat Bahan Lain
                                                    5</label>
                                                <input type="text" class="form-control" id="berat_bahan_lain5"
                                                    name="berat_bahan_lain5" placeholder="Masukkan berat..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="sensor_bahan_lain5" class="form-label">sensor Bahan Lain
                                                    5</label>
                                                <select class="form-select" id="sensor_bahan_lain5"
                                                    name="sensor_bahan_lain5" required>
                                                    <option value="" disabled selected>Pilih Status</option>
                                                    <option value="Checked">Checked</option>
                                                    <option value="Not Checked">Not Checked</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="air" class="form-label">Air (kg)</label>
                                <input type="text" class="form-control" id="air" name="air"
                                    placeholder="Masukkan air..." required>
                            </div>
                            <div class="mb-3">
                                <label for="suhu_air" class="form-label">Suhu Air</label>
                                <input type="text" class="form-control" id="suhu_air" name="suhu_air"
                                    placeholder="Masukkan suhu_air..." required>
                            </div>
                            <div class="mb-3">
                                <label for="suhu_marinade" class="form-label">Suhu Marinade</label>
                                <input type="text" class="form-control" id="suhu_marinade" name="suhu_marinade"
                                    placeholder="Masukkan suhu_marinade..." required>
                            </div>
                            <div class="mb-3">
                                <label for="lama_pengadukan" class="form-label">Lama Pengadukan (menit)</label>
                                <input type="text" class="form-control" id="lama_pengadukan" name="lama_pengadukan"
                                    placeholder="Masukkan lama_pengadukan..." required>
                            </div>
                            <div class="mb-3">
                                <label for="marinade_brix" class="form-label">Marinade Brix - Salinity</label>
                                <input type="text" class="form-control" id="marinade_brix" name="marinade_brix"
                                    placeholder="Masukkan marinade brix - salinity..." required>
                            </div>
                            <h5 class="card-header">PARAMETER TUMBLING</h5>

                            <div class="mb-3">
                                <label for="drum_on" class="form-label">Drum On</label>
                                <input type="text" class="form-control" id="drum_on" name="drum_on"
                                    placeholder="Masukkan Drum On..." required>
                            </div>
                            <div class="mb-3">
                                <label for="drum_off" class="form-label">Drum Off</label>
                                <input type="text" class="form-control" id="drum_off" name="drum_off"
                                    placeholder="Masukkan Drum Off..." required>
                            </div>
                            <div class="mb-3">
                                <label for="drum_speed" class="form-label">Drum Speed (RPM)</label>
                                <input type="text" class="form-control" id="drum_speed" name="drum_speed"
                                    placeholder="Masukkan Drum Speed..." required>
                            </div>
                            <div class="mb-3">
                                <label for="vacuum_time" class="form-label">Vacuum time</label>
                                <input type="text" class="form-control" id="vacuum_time" name="vacuum_time"
                                    placeholder="Masukkan Vacuum Time..." required>
                            </div>
                            <div class="mb-3">
                                <label for="total_time" class="form-label">Total Time</label>
                                <input type="text" class="form-control" id="total_time" name="total_time"
                                    placeholder="Masukkan Total Time..." required>
                            </div>
                            <div class="mb-3">
                                <label for="mulai" class="form-label">MULAI</label>
                                <input type="time" class="form-control" id="mulai" name="mulai"
                                    placeholder="Masukkan Mulai..." required>
                            </div>
                            <div class="mb-3">
                                <label for="selesai" class="form-label">SELESAI</label>
                                <input type="time" class="form-control" id="selesai" name="selesai"
                                    placeholder="Masukkan Selesai..." required>
                            </div>


                            <h5 class="card-header">HASIL TUMBLING</h5>
                            <div class="accordion" id="accordionSuhuDagingTumbling">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSuhuDagingTumbling">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSuhuDagingTumbling" aria-expanded="true"
                                            aria-controls="collapseSuhuDagingTumbling">
                                            Suhu Daging Tumbling Details
                                        </button>
                                    </h2>
                                    <div id="collapseSuhuDagingTumbling" class="accordion-collapse collapse show"
                                        aria-labelledby="headingSuhuDagingTumbling"
                                        data-bs-parent="#accordionSuhuDagingTumbling">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="suhu_daging_tumbling1" class="form-label">Suhu Daging
                                                    1</label>
                                                <input type="text" class="form-control" id="suhu_daging_tumbling1"
                                                    name="suhu_daging_tumbling1" placeholder="Masukkan Suhu Daging..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="suhu_daging_tumbling2" class="form-label">Suhu Daging
                                                    2</label>
                                                <input type="text" class="form-control" id="suhu_daging_tumbling2"
                                                    name="suhu_daging_tumbling2" placeholder="Masukkan Suhu Daging..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="suhu_daging_tumbling3" class="form-label">Suhu Daging
                                                    3</label>
                                                <input type="text" class="form-control" id="suhu_daging_tumbling3"
                                                    name="suhu_daging_tumbling3" placeholder="Masukkan Suhu Daging..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="suhu_daging_tumbling4" class="form-label">Suhu Daging
                                                    4</label>
                                                <input type="text" class="form-control" id="suhu_daging_tumbling4"
                                                    name="suhu_daging_tumbling4" placeholder="Masukkan Suhu Daging..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="suhu_daging_tumbling5" class="form-label">Suhu Daging
                                                    5</label>
                                                <input type="text" class="form-control" id="suhu_daging_tumbling5"
                                                    name="suhu_daging_tumbling5" placeholder="Masukkan Suhu Daging..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="suhu_daging_tumbling6" class="form-label">Suhu Daging
                                                    6</label>
                                                <input type="text" class="form-control" id="suhu_daging_tumbling6"
                                                    name="suhu_daging_tumbling6" placeholder="Masukkan Suhu Daging..."
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="rataratatumbling" class="form-label">Rata-rata</label>
                                <input type="text" class="form-control" id="rataratatumbling" name="rataratatumbling"
                                    placeholder="Masukkan Rata-rata..." required>
                            </div>
                            <div class="mb-3">
                                <label for="kondisi" class="form-label">Kondisi</label>
                                <input type="text" class="form-control" id="kondisi" name="kondisi"
                                    placeholder="Masukkan Kondisi..." required>
                            </div>
                            <div class="mb-3">
                                <label for="catatan_kondisi" class="form-label">Catatan kondisi</label>
                                <textarea class="form-control" id="catatan_kondisi" name="catatan_kondisi"
                                    placeholder="Masukkan Catatan Kondisi..." required rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="catatan" class="form-label">Catatan</label>
                                <textarea class="form-control" id="catatan" name="catatan"
                                    placeholder="Masukkan Catatan ..." required rows="4"></textarea>
                            </div>

                        </div>
                    </div>

                    <h5>SECTION 2</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="section2_batch_no" class="form-label">Batch No. </label>
                                <input type="text" class="form-control" id="section2_batch_no" name="section2_batch_no"
                                    placeholder="Masukkan kode batch_no" required>
                            </div>
                            <div class="mb-3">
                                <label for="section2_identifikasi_daging" class="form-label">Identifikasi Daging</label>
                                <input type="text" class="form-control" id="section2_identifikasi_daging"
                                    name="section2_identifikasi_daging" placeholder="Masukkan identifikasi_daging..."
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="section2_asal" class="form-label">Asal</label>
                                <input type="text" class="form-control" id="section2_asal" name="section2_asal"
                                    placeholder="Masukkan asal..." required>
                            </div>
                            <div class="mb-3">
                                <label for="section2_tanggal_produksi_kode" class="form-label">Tanggal
                                    Produksi/Kode</label>
                                <input type="text" class="form-control" id="section2_tanggal_produksi_kode"
                                    name="section2_tanggal_produksi_kode"
                                    placeholder="Masukkan tanggal_produksi atau kode..." required>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Input Daging and Suhu (Set 1)
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="section2_berat_daging" class="form-label">Berat Daging (Set
                                                    1)</label>
                                                <input type="text" class="form-control" id="section2_berat_daging"
                                                    name="section2_berat_daging" placeholder="Masukkan berat (Set 1)..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging" class="form-label">Suhu Daging (Set
                                                    1)</label>
                                                <input type="text" class="form-control" id="section2_suhu_daging"
                                                    name="section2_suhu_daging"
                                                    placeholder="Masukkan suhu_daging (Set 1)..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging2" class="form-label">Suhu Daging (Set
                                                    1)</label>
                                                <input type="text" class="form-control" id="section2_suhu_daging2"
                                                    name="section2_suhu_daging2"
                                                    placeholder="Masukkan suhu_daging (Set 1)..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging3" class="form-label">Suhu Daging (Set
                                                    1)</label>
                                                <input type="text" class="form-control" id="section2_suhu_daging3"
                                                    name="section2_suhu_daging3"
                                                    placeholder="Masukkan suhu_daging (Set 1)..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging4" class="form-label">Suhu Daging (Set
                                                    1)</label>
                                                <input type="text" class="form-control" id="section2_suhu_daging4"
                                                    name="section2_suhu_daging4"
                                                    placeholder="Masukkan suhu_daging (Set 1)..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_rataratadaging" class="form-label">Rata-rata (Set
                                                    1)</label>
                                                <input type="text" class="form-control" id="section2_rataratadaging"
                                                    name="section2_rataratadaging"
                                                    placeholder="Masukkan Rata-rata (Set 1)..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="section2_tanggal_produksi_kode2" class="form-label">Tanggal Produksi/Kode
                                    (Set 2)</label>
                                <input type="text" class="form-control" id="section2_tanggal_produksi_kode2"
                                    name="section2_tanggal_produksi_kode2"
                                    placeholder="Masukkan tanggal_produksi atau kode2..." required>
                            </div>
                            <div class="accordion" id="accordionExample2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            Input Daging and Suhu (Set 2)
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse show"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="section2_berat_daging2" class="form-label">Berat Daging (Set
                                                    2)</label>
                                                <input type="text" class="form-control" id="section2_berat_daging2"
                                                    name="section2_berat_daging2"
                                                    placeholder="Masukkan berat daging (Set 2)..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging5" class="form-label">Suhu Daging (Set
                                                    2)</label>
                                                <input type="text" class="form-control" id="section2_suhu_daging5"
                                                    name="section2_suhu_daging5"
                                                    placeholder="Masukkan suhu_daging (Set 2)..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging6" class="form-label">Suhu Daging (Set
                                                    2)</label>
                                                <input type="text" class="form-control" id="section2_suhu_daging6"
                                                    name="section2_suhu_daging6"
                                                    placeholder="Masukkan suhu_daging (Set 2)..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging7" class="form-label">Suhu Daging (Set
                                                    2)</label>
                                                <input type="text" class="form-control" id="section2_suhu_daging7"
                                                    name="section2_suhu_daging7"
                                                    placeholder="Masukkan suhu_daging (Set 2)..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging8" class="form-label">Suhu Daging (Set
                                                    2)</label>
                                                <input type="text" class="form-control" id="section2_suhu_daging8"
                                                    name="section2_suhu_daging8"
                                                    placeholder="Masukkan suhu_daging (Set 2)..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_rataratadaging2" class="form-label">Rata-rata (Set
                                                    2)</label>
                                                <input type="text" class="form-control" id="section2_rataratadaging2"
                                                    name="section2_rataratadaging2"
                                                    placeholder="Masukkan Rata-rata (Set 2)..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="section2_tanggal_produksi_kode3" class="form-label">Tanggal Produksi/Kode
                                    (Set 3)</label>
                                <input type="text" class="form-control" id="section2_tanggal_produksi_kode3"
                                    name="section2_tanggal_produksi_kode3"
                                    placeholder="Masukkan tanggal_produksi atau kode3..." required>
                            </div>
                            <div class="accordion" id="accordionExample3">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            Input Daging and Suhu (Set 3)
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse show"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="section2_berat_daging3" class="form-label">Berat Daging (Set
                                                    3)</label>
                                                <input type="text" class="form-control" id="section2_berat_daging3"
                                                    name="section2_berat_daging3"
                                                    placeholder="Masukkan berat daging (Set 3)..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging9" class="form-label">Suhu Daging (Set
                                                    3)</label>
                                                <input type="text" class="form-control" id="section2_suhu_daging9"
                                                    name="section2_suhu_daging9"
                                                    placeholder="Masukkan suhu_daging (Set 3)..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging10" class="form-label">Suhu Daging (Set
                                                    3)</label>
                                                <input type="text" class="form-control" id="section2_suhu_daging10"
                                                    name="section2_suhu_daging10"
                                                    placeholder="Masukkan suhu_daging (Set 3)..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging11" class="form-label">Suhu Daging (Set
                                                    3)</label>
                                                <input type="text" class="form-control" id="section2_suhu_daging11"
                                                    name="section2_suhu_daging11"
                                                    placeholder="Masukkan suhu_daging (Set 3)..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging12" class="form-label">Suhu Daging (Set
                                                    3)</label>
                                                <input type="text" class="form-control" id="section2_suhu_daging12"
                                                    name="section2_suhu_daging12"
                                                    placeholder="Masukkan suhu_daging (Set 3)..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_rataratadaging3" class="form-label">Rata-rata (Set
                                                    3)</label>
                                                <input type="text" class="form-control" id="section2_rataratadaging3"
                                                    name="section2_rataratadaging3"
                                                    placeholder="Masukkan Rata-rata (Set 3)..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="section2_kondisi_daging" class="form-label">Kondisi Daging</label>
                                <input type="text" class="form-control" id="section2_kondisi_daging"
                                    name="section2_kondisi_daging" placeholder="Masukkan kondisi_daging..." required>
                            </div>
                            <!-- ------------------------------------------------------------------------------- -->
                            <h5 class="card-header">MARINADE</h5>
                            <div class="accordion" id="accordionExample3">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            Input Bahan Utama, Kode dan Marinade (Set 1)
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse show"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="section2_bahan_utama" class="form-label">Bahan Utama (set
                                                    1)</label>
                                                <input type="text" class="form-control" id="section2_bahan_utama"
                                                    name="section2_bahan_utama" placeholder="Masukkan bahan_utama..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_kode_marinade1" class="form-label">Kode marinade 1
                                                    (set 1)</label>
                                                <input type="text" class="form-control" id="section2_kode_marinade1"
                                                    name="section2_kode_marinade1" placeholder="Masukkan Kode..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_kode_marinade2" class="form-label">Kode marinade 2
                                                    (set 1)</label>
                                                <input type="text" class="form-control" id="section2_kode_marinade2"
                                                    name="section2_kode_marinade2" placeholder="Masukkan Kode..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_berat_marinade1" class="form-label">Berat marinade
                                                    1 (set 1)</label>
                                                <input type="text" class="form-control" id="section2_berat_marinade1"
                                                    name="section2_berat_marinade1" placeholder="Masukkan Berat..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_berat_marinade2" class="form-label">Berat marinade
                                                    2 (set 1)</label>
                                                <input type="text" class="form-control" id="section2_berat_marinade2"
                                                    name="section2_berat_marinade2" placeholder="Masukkan Berat..."
                                                    required>
                                            </div>
                                            <!-- ---------------------------------------------------------------- -->
                                            <div class="mb-3">
                                                <label for="section2_kode_marinade1_s2" class="form-label">Kode marinade
                                                    3 (set 1)</label>
                                                <input type="text" class="form-control" id="section2_kode_marinade1_s2"
                                                    name="section2_kode_marinade1_s2" placeholder="Masukkan Kode..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_kode_marinade2_s2" class="form-label">Kode marinade
                                                    4 (set 1)</label>
                                                <input type="text" class="form-control" id="section2_kode_marinade2_s2"
                                                    name="section2_kode_marinade2_s2" placeholder="Masukkan Kode..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_berat_marinade1_s2" class="form-label">Berat
                                                    marinade 3 (set 1)</label>
                                                <input type="text" class="form-control" id="section2_berat_marinade1_s2"
                                                    name="section2_berat_marinade1_s2" placeholder="Masukkan Berat..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_berat_marinade2_s2" class="form-label">Berat
                                                    marinade 4 (set 1)</label>
                                                <input type="text" class="form-control" id="section2_berat_marinade2_s2"
                                                    name="section2_berat_marinade2_s2" placeholder="Masukkan Berat..."
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion" id="accordionExample4">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="true"
                                            aria-controls="collapseFour">
                                            Input Bahan Utama, Kode dan Marinade (Set 2)
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse show"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body">
                                            <!-- Form Fields Inside the Accordion -->
                                            <div class="mb-3">
                                                <label for="section2_bahan_utama2" class="form-label">Bahan Utama (set
                                                    2)</label>
                                                <input type="text" class="form-control" id="section2_bahan_utama2"
                                                    name="section2_bahan_utama2" placeholder="Masukkan bahan_utama2..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_kode_marinade3" class="form-label">Kode marinade 1
                                                    (set 2)</label>
                                                <input type="text" class="form-control" id="section2_kode_marinade3"
                                                    name="section2_kode_marinade3" placeholder="Masukkan Kode..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_kode_marinade4" class="form-label">Kode marinade 2
                                                    (set 2)</label>
                                                <input type="text" class="form-control" id="section2_kode_marinade4"
                                                    name="section2_kode_marinade4" placeholder="Masukkan Kode..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_berat_marinade3" class="form-label">Berat marinade
                                                    1 (set 2)</label>
                                                <input type="text" class="form-control" id="section2_berat_marinade3"
                                                    name="section2_berat_marinade3" placeholder="Masukkan Berat..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_berat_marinade4" class="form-label">Berat marinade
                                                    2 (set 2)</label>
                                                <input type="text" class="form-control" id="section2_berat_marinade4"
                                                    name="section2_berat_marinade4" placeholder="Masukkan Berat..."
                                                    required>
                                            </div>
                                            <!-- ---------------------------------------------------------------- -->
                                            <div class="mb-3">
                                                <label for="section2_kode_marinade3_s2" class="form-label">Kode marinade
                                                    3 (set 2)</label>
                                                <input type="text" class="form-control" id="section2_kode_marinade3_s2"
                                                    name="section2_kode_marinade3_s2" placeholder="Masukkan Kode..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_kode_marinade4_s2" class="form-label">Kode marinade
                                                    4 (set 2)</label>
                                                <input type="text" class="form-control" id="section2_kode_marinade4_s2"
                                                    name="section2_kode_marinade4_s2" placeholder="Masukkan Kode..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_berat_marinade3_s2" class="form-label">Berat
                                                    marinade 3 (set 2)</label>
                                                <input type="text" class="form-control" id="section2_berat_marinade3_s2"
                                                    name="section2_berat_marinade3_s2" placeholder="Masukkan Berat..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_berat_marinade4_s2" class="form-label">Berat
                                                    marinade 4 (set 2)</label>
                                                <input type="text" class="form-control" id="section2_berat_marinade4_s2"
                                                    name="section2_berat_marinade4_s2" placeholder="Masukkan Berat..."
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Bahan Utama & Marinade (Set 3)
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="section2_bahan_utama3" class="form-label">Bahan Utama (set
                                                    3)</label>
                                                <input type="text" class="form-control" id="section2_bahan_utama3"
                                                    name="section2_bahan_utama3" placeholder="Masukkan bahan_utama3..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_kode_marinade5" class="form-label">Kode marinade 1
                                                    (set 3)</label>
                                                <input type="text" class="form-control" id="section2_kode_marinade5"
                                                    name="section2_kode_marinade5" placeholder="Masukkan Kode..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_kode_marinade6" class="form-label">Kode marinade 2
                                                    (set 3)</label>
                                                <input type="text" class="form-control" id="section2_kode_marinade6"
                                                    name="section2_kode_marinade6" placeholder="Masukkan Kode..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_berat_marinade5" class="form-label">Berat marinade
                                                    1 (set 3)</label>
                                                <input type="text" class="form-control" id="section2_berat_marinade5"
                                                    name="section2_berat_marinade5" placeholder="Masukkan Berat..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_berat_marinade6" class="form-label">Berat marinade
                                                    2 (set 3)</label>
                                                <input type="text" class="form-control" id="section2_berat_marinade6"
                                                    name="section2_berat_marinade6" placeholder="Masukkan Berat..."
                                                    required>
                                            </div>
                                            <!-- ---------------------------------------------------------------- -->
                                            <div class="mb-3">
                                                <label for="section2_kode_marinade5_s2" class="form-label">Kode marinade
                                                    3 (set 3)</label>
                                                <input type="text" class="form-control" id="section2_kode_marinade5_s2"
                                                    name="section2_kode_marinade5_s2" placeholder="Masukkan Kode..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_kode_marinade6_s2" class="form-label">Kode marinade
                                                    4 (set 3)</label>
                                                <input type="text" class="form-control" id="section2_kode_marinade6_s2"
                                                    name="section2_kode_marinade6_s2" placeholder="Masukkan Kode..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_berat_marinade5_s2" class="form-label">Berat
                                                    marinade 3 (set 3)</label>
                                                <input type="text" class="form-control" id="section2_berat_marinade5_s2"
                                                    name="section2_berat_marinade5_s2" placeholder="Masukkan Berat..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_berat_marinade6_s2" class="form-label">Berat
                                                    marinade 4 (set 3)</label>
                                                <input type="text" class="form-control" id="section2_berat_marinade6_s2"
                                                    name="section2_berat_marinade6_s2" placeholder="Masukkan Berat..."
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5 class="card-header">BAHAN LAIN YANG DITAMBAHKAN</h5>
                            <div class="accordion" id="accordionBahanLain">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingBahanLain">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseBahanLain" aria-expanded="true"
                                            aria-controls="collapseBahanLain">
                                            Bahan Lain 1 Details
                                        </button>
                                    </h2>
                                    <div id="collapseBahanLain" class="accordion-collapse collapse show"
                                        aria-labelledby="headingBahanLain" data-bs-parent="#accordionBahanLain">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="section2_bahan_lain1" class="form-label">Bahan Lain
                                                    1</label>
                                                <input type="text" class="form-control" id="section2_bahan_lain1"
                                                    name="section2_bahan_lain1" placeholder="Masukkan Bahan Lain..."
                                                    required readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_kode_bahan_lain1" class="form-label">Kode Bahan
                                                    Lain
                                                    1</label>
                                                <input type="text" class="form-control" id="section2_kode_bahan_lain1"
                                                    name="section2_kode_bahan_lain1" placeholder="Masukkan kode..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_berat_bahan_lain1" class="form-label">Berat Bahan
                                                    Lain
                                                    1</label>
                                                <input type="text" class="form-control" id="section2_berat_bahan_lain1"
                                                    name="section2_berat_bahan_lain1" placeholder="Masukkan berat..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_sensor_bahan_lain1" class="form-label">Sensor Bahan
                                                    Lain
                                                    1</label>
                                                <select class="form-select" id="section2_sensor_bahan_lain1"
                                                    name="section2_sensor_bahan_lain1" required>
                                                    <option value="" disabled selected>Pilih Status</option>
                                                    <option value="Checked">Checked</option>
                                                    <option value="Not Checked">Not Checked</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionBahanLain2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingBahanLain2">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseBahanLain2" aria-expanded="true"
                                            aria-controls="collapseBahanLain2">
                                            Bahan Lain 2 Details
                                        </button>
                                    </h2>
                                    <div id="collapseBahanLain2" class="accordion-collapse collapse show"
                                        aria-labelledby="headingBahanLain2" data-bs-parent="#accordionBahanLain2">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="section2_bahan_lain2" class="form-label">Bahan Lain
                                                    2</label>
                                                <input type="text" class="form-control" id="section2_bahan_lain2"
                                                    name="section2_bahan_lain2" placeholder="Masukkan Bahan Lain 2..."
                                                    required readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_kode_bahan_lain2" class="form-label">Kode Bahan
                                                    Lain
                                                    2</label>
                                                <input type="text" class="form-control" id="section2_kode_bahan_lain2"
                                                    name="section2_kode_bahan_lain2" placeholder="Masukkan kode..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_berat_bahan_lain2" class="form-label">Berat Bahan
                                                    Lain
                                                    2</label>
                                                <input type="text" class="form-control" id="section2_berat_bahan_lain2"
                                                    name="section2_berat_bahan_lain2" placeholder="Masukkan berat..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_sensor_bahan_lain2" class="form-label">Sensor Bahan
                                                    Lain
                                                    2</label>
                                                <select class="form-select" id="section2_sensor_bahan_lain2"
                                                    name="section2_sensor_bahan_lain2" required>
                                                    <option value="" disabled selected>Pilih Status</option>
                                                    <option value="Checked">Checked</option>
                                                    <option value="Not Checked">Not Checked</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion" id="accordionBahanLain3">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingBahanLain3">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseBahanLain3" aria-expanded="true"
                                            aria-controls="collapseBahanLain3">
                                            Bahan Lain 3 Details
                                        </button>
                                    </h2>
                                    <div id="collapseBahanLain3" class="accordion-collapse collapse show"
                                        aria-labelledby="headingBahanLain3" data-bs-parent="#accordionBahanLain3">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="section2_bahan_lain3" class="form-label">Bahan Lain
                                                    3</label>
                                                <input type="text" class="form-control" id="section2_bahan_lain3"
                                                    name="section2_bahan_lain3" placeholder="Masukkan Bahan Lain 3..."
                                                    required readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_kode_bahan_lain3" class="form-label">Kode Bahan
                                                    Lain
                                                    3</label>
                                                <input type="text" class="form-control" id="section2_kode_bahan_lain3"
                                                    name="section2_kode_bahan_lain3" placeholder="Masukkan kode..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_berat_bahan_lain3" class="form-label">Berat Bahan
                                                    Lain
                                                    3</label>
                                                <input type="text" class="form-control" id="section2_berat_bahan_lain3"
                                                    name="section2_berat_bahan_lain3" placeholder="Masukkan berat..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_sensor_bahan_lain3" class="form-label">Sensor Bahan
                                                    Lain
                                                    3</label>
                                                <select class="form-select" id="section2_sensor_bahan_lain3"
                                                    name="section2_sensor_bahan_lain3" required>
                                                    <option value="" disabled selected>Pilih Status</option>
                                                    <option value="Checked">Checked</option>
                                                    <option value="Not Checked">Not Checked</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="accordion" id="accordionBahanLain4">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingBahanLain4">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseBahanLain4" aria-expanded="true"
                                            aria-controls="collapseBahanLain4">
                                            Bahan Lain 4 Details
                                        </button>
                                    </h2>
                                    <div id="collapseBahanLain4" class="accordion-collapse collapse show"
                                        aria-labelledby="headingBahanLain4" data-bs-parent="#accordionBahanLain4">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="section2_bahan_lain4" class="form-label">Bahan Lain
                                                    4</label>
                                                <input type="text" class="form-control" id="section2_bahan_lain4"
                                                    name="section2_bahan_lain4" placeholder="Masukkan Bahan Lain 4..."
                                                    required readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_kode_bahan_lain4" class="form-label">Kode Bahan
                                                    Lain 4</label>
                                                <input type="text" class="form-control" id="section2_kode_bahan_lain4"
                                                    name="section2_kode_bahan_lain4" placeholder="Masukkan kode..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_berat_bahan_lain4" class="form-label">Berat Bahan
                                                    Lain 4</label>
                                                <input type="text" class="form-control" id="section2_berat_bahan_lain4"
                                                    name="section2_berat_bahan_lain4" placeholder="Masukkan berat..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_sensor_bahan_lain4" class="form-label">Sensor Bahan
                                                    Lain 4</label>
                                                <select class="form-select" id="section2_sensor_bahan_lain4"
                                                    name="section2_sensor_bahan_lain4" required>
                                                    <option value="" disabled selected>Pilih Status</option>
                                                    <option value="Checked">Checked</option>
                                                    <option value="Not Checked">Not Checked</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="accordionBahanLain5">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingBahanLain5">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseBahanLain5" aria-expanded="true"
                                            aria-controls="collapseBahanLain5">
                                            Bahan Lain 5 Details
                                        </button>
                                    </h2>
                                    <div id="collapseBahanLain5" class="accordion-collapse collapse show"
                                        aria-labelledby="headingBahanLain5" data-bs-parent="#accordionBahanLain5">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="section2_bahan_lain5" class="form-label">Bahan Lain
                                                    5</label>
                                                <input type="text" class="form-control" id="section2_bahan_lain5"
                                                    name="section2_bahan_lain5" placeholder="Masukkan Bahan Lain 5..."
                                                    required readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_kode_bahan_lain5" class="form-label">Kode Bahan
                                                    Lain 5</label>
                                                <input type="text" class="form-control" id="section2_kode_bahan_lain5"
                                                    name="section2_kode_bahan_lain5" placeholder="Masukkan kode..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_berat_bahan_lain5" class="form-label">Berat Bahan
                                                    Lain 5</label>
                                                <input type="text" class="form-control" id="section2_berat_bahan_lain5"
                                                    name="section2_berat_bahan_lain5" placeholder="Masukkan berat..."
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_sensor_bahan_lain5" class="form-label">Sensor Bahan
                                                    Lain 5</label>
                                                <select class="form-select" id="section2_sensor_bahan_lain5"
                                                    name="section2_sensor_bahan_lain5" required>
                                                    <option value="" disabled selected>Pilih Status</option>
                                                    <option value="Checked">Checked</option>
                                                    <option value="Not Checked">Not Checked</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="section2_air" class="form-label">Air (kg)</label>
                                <input type="text" class="form-control" id="section2_air" name="section2_air"
                                    placeholder="Masukkan air..." required>
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_air" class="form-label">Suhu Air</label>
                                <input type="text" class="form-control" id="section2_suhu_air" name="section2_suhu_air"
                                    placeholder="Masukkan suhu_air..." required>
                            </div>
                            <div class="mb-3">
                                <label for="section2_suhu_marinade" class="form-label">Suhu Marinade</label>
                                <input type="text" class="form-control" id="section2_suhu_marinade"
                                    name="section2_suhu_marinade" placeholder="Masukkan suhu_marinade..." required>
                            </div>
                            <div class="mb-3">
                                <label for="section2_lama_pengadukan" class="form-label">Lama Pengadukan (menit)</label>
                                <input type="text" class="form-control" id="section2_lama_pengadukan"
                                    name="section2_lama_pengadukan" placeholder="Masukkan lama_pengadukan..." required>
                            </div>
                            <div class="mb-3">
                                <label for="section2_marinade_brix" class="form-label">Marinade Brix - Salinity</label>
                                <input type="text" class="form-control" id="section2_marinade_brix"
                                    name="section2_marinade_brix" placeholder="Masukkan marinade brix - salinity..."
                                    required>
                            </div>
                            <h5 class="card-header">PARAMETER TUMBLING</h5>

                            <div class="mb-3">
                                <label for="section2_drum_on" class="form-label">Drum On</label>
                                <input type="text" class="form-control" id="section2_drum_on" name="section2_drum_on"
                                    placeholder="Masukkan Drum On..." required>
                            </div>
                            <div class="mb-3">
                                <label for="section2_drum_off" class="form-label">Drum Off</label>
                                <input type="text" class="form-control" id="section2_drum_off" name="section2_drum_off"
                                    placeholder="Masukkan Drum Off..." required>
                            </div>
                            <div class="mb-3">
                                <label for="section2_drum_speed" class="form-label">Drum Speed (RPM)</label>
                                <input type="text" class="form-control" id="section2_drum_speed"
                                    name="section2_drum_speed" placeholder="Masukkan Drum Speed..." required>
                            </div>
                            <div class="mb-3">
                                <label for="section2_vacuum_time" class="form-label">Vacuum time</label>
                                <input type="text" class="form-control" id="section2_vacuum_time"
                                    name="section2_vacuum_time" placeholder="Masukkan Vacuum Time..." required>
                            </div>
                            <div class="mb-3">
                                <label for="section2_total_time" class="form-label">Total Time</label>
                                <input type="text" class="form-control" id="section2_total_time"
                                    name="section2_total_time" placeholder="Masukkan Total Time..." required>
                            </div>
                            <div class="mb-3">
                                <label for="section2_mulai" class="form-label">MULAI</label>
                                <input type="time" class="form-control" id="section2_mulai" name="section2_mulai"
                                    placeholder="Masukkan Mulai..." required>
                            </div>
                            <div class="mb-3">
                                <label for="section2_selesai" class="form-label">SELESAI</label>
                                <input type="time" class="form-control" id="section2_selesai" name="section2_selesai"
                                    placeholder="Masukkan Selesai..." required>
                            </div>



                            <h5 class="card-header">HASIL TUMBLING</h5>
                            <div class="accordion" id="accordionSuhuDagingTumbling">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSuhuDagingTumbling">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSuhuDagingTumbling" aria-expanded="true"
                                            aria-controls="collapseSuhuDagingTumbling">
                                            Suhu Daging Tumbling Details
                                        </button>
                                    </h2>
                                    <div id="collapseSuhuDagingTumbling" class="accordion-collapse collapse show"
                                        aria-labelledby="headingSuhuDagingTumbling"
                                        data-bs-parent="#accordionSuhuDagingTumbling">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging_tumbling1" class="form-label">Suhu
                                                    Daging
                                                    1</label>
                                                <input type="text" class="form-control"
                                                    id="section2_suhu_daging_tumbling1"
                                                    name="section2_suhu_daging_tumbling1"
                                                    placeholder="Masukkan Suhu Daging..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging_tumbling2" class="form-label">Suhu
                                                    Daging
                                                    2</label>
                                                <input type="text" class="form-control"
                                                    id="section2_suhu_daging_tumbling2"
                                                    name="section2_suhu_daging_tumbling2"
                                                    placeholder="Masukkan Suhu Daging..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging_tumbling3" class="form-label">Suhu
                                                    Daging
                                                    3</label>
                                                <input type="text" class="form-control"
                                                    id="section2_suhu_daging_tumbling3"
                                                    name="section2_suhu_daging_tumbling3"
                                                    placeholder="Masukkan Suhu Daging..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging_tumbling4" class="form-label">Suhu
                                                    Daging
                                                    4</label>
                                                <input type="text" class="form-control"
                                                    id="section2_suhu_daging_tumbling4"
                                                    name="section2_suhu_daging_tumbling4"
                                                    placeholder="Masukkan Suhu Daging..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging_tumbling5" class="form-label">Suhu
                                                    Daging
                                                    5</label>
                                                <input type="text" class="form-control"
                                                    id="section2_suhu_daging_tumbling5"
                                                    name="section2_suhu_daging_tumbling5"
                                                    placeholder="Masukkan Suhu Daging..." required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="section2_suhu_daging_tumbling6" class="form-label">Suhu
                                                    Daging
                                                    6</label>
                                                <input type="text" class="form-control"
                                                    id="section2_suhu_daging_tumbling6"
                                                    name="section2_suhu_daging_tumbling6"
                                                    placeholder="Masukkan Suhu Daging..." required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="section2_rataratatumbling" class="form-label">Rata-rata</label>
                                <input type="text" class="form-control" id="section2_rataratatumbling"
                                    name="section2_rataratatumbling" placeholder="Masukkan Rata-rata..." required>
                            </div>
                            <div class="mb-3">
                                <label for="section2_kondisi" class="form-label">Kondisi</label>
                                <input type="text" class="form-control" id="section2_kondisi" name="section2_kondisi"
                                    placeholder="Masukkan Kondisi..." required>
                            </div>
                            <div class="mb-3">
                                <label for="section2_catatan_kondisi" class="form-label">Catatan kondisi</label>
                                <textarea class="form-control" id="section2_catatan_kondisi"
                                    name="section2_catatan_kondisi" placeholder="Masukkan Catatan Kondisi..." required
                                    rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="section2_catatan" class="form-label">Catatan</label>
                                <textarea class="form-control" id="section2_catatan" name="section2_catatan"
                                    placeholder="Masukkan Catatan ..." required rows="4"></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i> Simpan</button>
                        <a href="<?= base_url('pem_tumbling') ?>" class="btn btn-danger"><i class="bx bx-x"></i>
                            Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- / Content -->
</div>
<script>
    function syncInput(sourceId, targetId) {
        // Get the value of the source input
        const sourceValue = document.getElementById(sourceId).value;
        // Set the value of the target input
        document.getElementById(targetId).value = sourceValue;
    }
</script>