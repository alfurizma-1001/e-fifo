<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.min.js"></script>
    <!-- Include other necessary scripts and styles -->
</head>
<div class="container">
    <div id="header">
        <h1>E-FIFO</h1>
        <p>PT Charoen Pokphand Indonesia</p>
    </div>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="row w-100 justify-content-center gap-4">
            <!-- Item Release Form -->
            <div class="row w-100 justify-content-center mt-5">
                <div class="col-md-10 bg-white p-4 rounded shadow">
                    <h3 class="text-center mb-4">Item Release</h3>
                    <form action="<?= base_url('offload/release_item') ?>" method="post" id="releaseForm">
                        <div class="container text-center">
                            <!-- Barcode Scanner Button and Cancel Button -->
                            <button type="button" class="btn btn-secondary" id="scanBarcodeButton">Scan Barcode</button>
                            <button type="button" class="btn btn-danger" id="cancelScanButton"
                                style="display: none;">Cancel</button>
                            <!-- Barcode Scanner Display Area -->
                            <div class="d-flex justify-content-center" style="margin-top: 20px;">
                                <div id="reader" style="width: 300px; height: 300px; display: block; margin: auto;">
                                </div>
                            </div>
                        </div>
                        <!-- Select Rak -->
                        <div class="form-group">
                            <label for="release_rak">Select Rak:</label>
                            <select class="form-control" id="release_rak" name="release_rak" required>
                                <option value="">Select Rak</option>
                                <?php
                                // Loop through racks 1 to 46 and their variations
                                for ($i = 1; $i <= 46; $i++) {
                                    echo "<option value='Rak $i'>Rak $i</option>";
                                    echo "<option value='Rak {$i}_2'>Rak {$i}_2</option>";
                                    echo "<option value='Rak {$i}_3'>Rak {$i}_3</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <!-- Select Kode -->
                        <div class="form-group">
                            <label for="release_kode">Kode:</label>
                            <select class="form-control" id="release_kode" name="release_kode" required>
                                <option value="">Select Kode</option>
                                <!-- Kode options will be populated dynamically based on Rak selection -->
                            </select>
                        </div>



                        <!-- Display Fields -->
                        <div class="form-group">
                            <label for="release_nama">Nama:</label>
                            <input type="text" class="form-control" id="release_nama" name="release_nama" readonly>
                        </div>

                        <div class="form-group">
                            <label for="release_jumlah">Jumlah:</label>
                            <input type="number" class="form-control" id="release_jumlah" name="release_jumlah"
                                readonly>
                        </div>

                        <div class="form-group">
                            <label for="release_tgl_expired">Tanggal Expired:</label>
                            <input type="text" class="form-control" id="release_tgl_expired" name="release_tgl_expired"
                                readonly>
                        </div>

                        <div class="form-group">
                            <label for="release_status">Status:</label>
                            <input type="text" class="form-control" id="release_status" name="release_status" readonly>
                        </div>

                        <div class="form-group">
                            <label for="destination">Destination:</label>
                            <input type="text" class="form-control" id="destination" name="destination">
                        </div>

                        <div class="form-group">
                            <label for="jumlah_offload">Jumlah Offload:</label>
                            <input type="text" class="form-control" id="jumlah_offload" name="jumlah_checkout">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Release Item</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    document.getElementById('scanBarcodeButton').addEventListener('click', function () {
        // Display the scanner area and cancel button when the scan button is clicked
        document.getElementById('reader').style.display = 'block';
        document.getElementById('cancelScanButton').style.display = 'inline-block';

        // Start QuaggaJS
        Quagga.init({
            inputStream: {
                type: "LiveStream",
                target: document.getElementById('reader'), // The DOM element for the video stream
                constraints: {
                    facingMode: "environment" // Use the back camera
                }
            },
            decoder: {
                readers: ["code_128_reader"] // Specify the barcode type
            }
        }, function (err) {
            if (err) {
                console.error("Quagga initialization error:", err);
                return;
            }
            console.log("Quagga initialization finished. Ready to start");
            Quagga.start(); // Start the camera
        });

        // Handle the detected barcode
        Quagga.onDetected(function (data) {
            console.log("Raw detected data:", data);
            const code = data.codeResult.code; // The detected barcode value
            alert("Scanned Barcode Value: " + code); // Show the scanned value in a pop-up

            // Stop scanning after a successful read
            Quagga.stop();
            document.getElementById('reader').style.display = 'none';
            document.getElementById('cancelScanButton').style.display = 'none';

            // Regex to capture the expected Kode and Rak pattern
            const kodePattern = /^(\d{6})(Rak(\d+))$/; // Updated pattern for Rak number
            const match = code.match(kodePattern);

            if (match) {
                const kode = match[1]; // The first capturing group is the Kode
                const rakFull = match[2]; // The full Rak value (e.g., 'Rak33')
                const rakNumber = rakFull.replace('Rak', ''); // Extract just the number (e.g., '33')

                // Construct the rak value as "Rak 3_3"
                const rakValue = `Rak ${rakNumber.slice(0, -1)}_${rakNumber.slice(-1)}`; // '3_3' from '33'

                // Populate "Select Rak" dropdown
                const rakSelect = document.getElementById('release_rak');
                for (let i = 0; i < rakSelect.options.length; i++) {
                    if (rakSelect.options[i].value === rakValue) {
                        rakSelect.selectedIndex = i;
                        break;
                    }
                }

                // Populate "Select Kode" dropdown
                const kodeSelect = document.getElementById('release_kode');
                for (let i = 0; i < kodeSelect.options.length; i++) {
                    if (kodeSelect.options[i].value === kode) {
                        kodeSelect.selectedIndex = i;
                        break;
                    }
                }

                // Trigger events to load dependent fields if needed
                onRakChange(rakValue); // Load Kode options based on Rak

                // Select the Kode after setting Rak
                kodeSelect.value = kode; // Set the Kode value directly
                onKodeChange(kodeSelect); // Update additional fields based on Kode selection
            } else {
                console.error("Unexpected barcode format:", code);
                alert("Unexpected barcode format: " + code); // Notify the user of the unexpected format
            }
        });
    });

    // Cancel button functionality to stop the scanner
    document.getElementById('cancelScanButton').addEventListener('click', function () {
        Quagga.stop(); // Stop the Quagga scanner
        document.getElementById('reader').style.display = 'none';
        document.getElementById('cancelScanButton').style.display = 'none';
    });

    // Generate rakItems in JavaScript from PHP data
    const rakItems = <?= $rakItems; ?>;

    function onRakChange(selectedRak) {
        const kodeSelect = document.getElementById('release_kode');
        kodeSelect.innerHTML = '<option value="">Select Kode</option>'; // Reset Kode dropdown

        console.log(`Selected Rak: ${selectedRak}`); // Debugging output
        if (rakItems[selectedRak]) {
            rakItems[selectedRak].forEach(item => {
                const option = document.createElement('option');
                option.value = item.kode;
                option.textContent = item.kode;
                option.dataset.nama = item.nama;
                option.dataset.jumlah = item.jumlah;
                option.dataset.tglExpired = item.tgl_expired;
                option.dataset.status = item.status;

                kodeSelect.appendChild(option);
            });
        } else {
            console.log("No items found for selected Rak.");
        }
    }

    function onKodeChange(selectedKode) {
        const selectedOption = selectedKode.options[selectedKode.selectedIndex];
        console.log(`Selected Kode: ${selectedOption.value}`); // Debugging output
        document.getElementById('release_nama').value = selectedOption.dataset.nama || '';
        document.getElementById('release_jumlah').value = selectedOption.dataset.jumlah || '';
        document.getElementById('release_tgl_expired').value = selectedOption.dataset.tglExpired || '';
        document.getElementById('release_status').value = selectedOption.dataset.status || '';
    }

    document.getElementById('release_rak').addEventListener('change', function () {
        onRakChange(this.value);
    });

    document.getElementById('release_kode').addEventListener('change', function () {
        onKodeChange(this);
    });


</script>