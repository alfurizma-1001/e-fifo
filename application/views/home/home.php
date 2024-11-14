<div class="container">
  <div id="header">
    <h1>E-FIFO</h1>
    <p>PT Charoen Pokphand Indonesia</p>
    <div class="search-container">
      <input type="text" id="searchInput" placeholder="Search for a rack..." onkeyup="filterCards()">
    </div>
    <div class="squares-container" id="squaresContainer">
      <!-- Dynamically generate squares with numbers from 1 to 46_3 -->
      <?php for ($i = 1; $i <= 46; $i++): ?>
        <?php for ($j = 1; $j <= 3; $j++): ?>
          <div class="square" id="rackSquare<?= $i . ($j > 1 ? '_' . $j : '') ?>">
            <?= $i . ($j > 1 ? '_' . $j : '') ?>
          </div>
        <?php endfor; ?>
      <?php endfor; ?>
    </div>
    <style>
      .squares-container {
        display: grid;
        grid-template-columns: repeat(15, 1fr);
        /* 15 squares per row */
        gap: 10px;
        margin-top: 20px;
      }

      .square {
        width: 50px;
        /* Adjust the width of each square */
        height: 50px;
        /* Adjust the height of each square */
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        border-radius: 5px;
        color: white;
        /* Text color */
        background-color: red;
        /* Default to red for empty */
      }
    </style>

    <script>
      // Fetch rack items status dynamically
      async function fetchRackItemsStatus() {
        const response = await fetch('<?= base_url("home/get_rack_items_status") ?>'); // Update URL to your new endpoint
        return await response.json(); // Return parsed JSON
      }

      // Function to update square colors based on item presence
      async function updateSquares() {
        const squares = document.querySelectorAll('.square');
        const rackData = await fetchRackItemsStatus(); // Get dynamic data

        squares.forEach(square => {
          const rackId = square.id.replace('rackSquare', ''); // Get the rack ID (e.g., "1", "2_3")
          const hasItems = rackData[rackId] || false; // Check if the rack has items

          if (hasItems) {
            square.classList.add('has-items'); // Add green color if has items
            square.style.backgroundColor = 'green';
          } else {
            square.classList.remove('has-items'); // Keep red if no items
            square.style.backgroundColor = 'red';
          }
        });
      }

      // Call updateSquares initially to set correct colors
      document.addEventListener('DOMContentLoaded', updateSquares);
    </script>

  </div>
  <div class="container" id="cardContainer">
    <!-- Card Structure -->
    <div class="card">
      <div class="card-image">
        <img src="<?= base_url('assets/img/warehouse.jpg') ?>">
      </div>
      <div class="card-text">
        <p class="card-meal-type">WAREHOUSE</p>
        <h2 class="card-title">SAMPLING FG</h2>
        <div class="card-body">
          <table>
            <thead>
              <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jumlah</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($items as $item): ?>
                <tr>
                  <td><?= htmlspecialchars($item['kode']); ?></td>
                  <td><?= htmlspecialchars($item['nama']); ?></td>
                  <td><?= htmlspecialchars($item['jumlah']); ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-price">
        <button class="price-button" id="samplingfg" onclick="showSamplingFGModal()">Details</button>
      </div>
    </div>
    <?php for ($i = 1; $i <= 46; $i++): ?>
      <?php for ($j = 1; $j <= 3; $j++): ?>
        <div class="card" data-rak="Rak <?= $i . ($j > 1 ? '_' . $j : '') ?>">
          <div class="card-image">
            <img src="<?= base_url() ?>assets/img/warehouse.jpg">
          </div>
          <div class="card-text">
            <p class="card-meal-type">WAREHOUSE</p>
            <h2 class="card-title">RAK <?= $i . ($j > 1 ? '_' . $j : '') ?></h2>
            <div class="card-body">
              <h3 class="text-center">Items in Rak <?= $i . ($j > 1 ? '_' . $j : '') ?></h3>
              <table>
                <thead>
                  <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  // Dynamically load the items for the current rack variation
                  $current_rak_items = ${'rak' . $i . ($j > 1 ? '_' . $j : '') . '_items'};
                  if (!empty($current_rak_items)):
                    foreach ($current_rak_items as $item): ?>
                      <tr>
                        <td><?= htmlspecialchars($item['kode']); ?></td>
                        <td><?= htmlspecialchars($item['nama']); ?></td>
                        <td><?= htmlspecialchars($item['jumlah']); ?></td>
                      </tr>
                    <?php endforeach;
                  else: ?>
                    <tr>
                      <td colspan="3" class="text-center">No items found in Rak <?= $i . ($j > 1 ? '_' . $j : '') ?></td>
                    </tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-price">
            <button class="price-button"
              onclick="showRackModal('Rak <?= $i . ($j > 1 ? '_' . $j : '') ?>')">Details</button>
          </div>
        </div>
      <?php endfor; ?>
    <?php endfor; ?>
  </div>
</div>

<script>
  function filterCards() {
    const input = document.getElementById('searchInput').value.toLowerCase();
    const cards = document.querySelectorAll('#cardContainer .card');

    cards.forEach(card => {
      const titleText = card.querySelector('.card-title').textContent.toLowerCase(); // Get the title text
      if (titleText.includes(input)) {
        card.style.display = ''; // Show the card
      } else {
        card.style.display = 'none'; // Hide the card
      }
    });
  }
</script>

<style>
  .search-container {
    margin-bottom: 20px;
    /* Add space below the search input */
  }

  #searchInput {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
</style>




<!-- Combined Modal Structure -->
<div id="itemModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2 id="modalTitle">Details</h2>
    <div class="table-container">
      <table class="modal-table">
        <thead>
          <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Tanggal Expired</th>
            <th>Jumlah</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody id="modalTableBody">
          <!-- Rows will be populated here via JavaScript -->
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Modal Styles -->
<style>
  /* Modal Background */
  .modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
  }

  /* Modal Content */
  .modal-content {
    background: #fff;
    border-radius: 10px;
    padding: 20px;
    width: 90%;
    max-width: 800px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    position: relative;
    animation: fadeIn 0.4s ease-out;
  }

  /* Close Button */
  .close {
    position: absolute;
    top: 15px;
    right: 15px;
    font-size: 24px;
    color: #555;
    cursor: pointer;
    transition: color 0.3s;
  }

  .close:hover {
    color: #ff6b6b;
  }

  /* Table Container */
  .table-container {
    max-height: 400px;
    overflow-y: auto;
  }

  /* Table Styling */
  .modal-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
  }

  .modal-table th,
  .modal-table td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
    font-size: 16px;
  }

  .modal-table th {
    background-color: #007acc;
    color: #fff;
  }

  .modal-table tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  .modal-table tr:hover {
    background-color: #e1f5fe;
  }

  /* Fade-in Animation */
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: scale(0.9);
    }

    to {
      opacity: 1;
      transform: scale(1);
    }
  }
</style>

<!-- JavaScript for Modal -->
<script>
  // Sample data for demo purposes - replace with data fetched from your server
  const samplingItems = <?= json_encode($items); ?>;
  const allItems = {};

  // Dynamically populate allItems with racks from 'Rak 1' to 'Rak 46_3'
  <?php for ($i = 1; $i <= 46; $i++): ?>
    allItems['Rak <?= $i ?>'] = <?= json_encode(${'rak' . $i . '_items'}); ?>; // For "Rak 1" to "Rak 46"
    <?php for ($j = 2; $j <= 3; $j++): ?>
      allItems['Rak <?= $i . '_' . $j ?>'] = <?= json_encode(${'rak' . $i . '_' . $j . '_items'}); ?>; // For "Rak 1_2" to "Rak 46_3"
    <?php endfor; ?>
  <?php endfor; ?>

  function showSamplingFGModal() {
    const modalTitle = document.getElementById('modalTitle');
    const modalTableBody = document.getElementById('modalTableBody');

    // Set the title for the modal
    modalTitle.textContent = 'Sampling FG';

    // Clear any previous data in the modal body
    modalTableBody.innerHTML = '';

    // Populate table rows for Sampling FG data
    samplingItems.forEach(item => {
      const row = document.createElement('tr');
      row.innerHTML = `
                  <td>${item.kode}</td>
                  <td>${item.nama}</td>
                  <td>${item.tgl_expired}</td>
                  <td>${item.jumlah}</td>
                  <td>${item.status}</td>
              `;
      modalTableBody.appendChild(row);
    });

    // Show the modal
    document.getElementById('itemModal').style.display = 'flex';
  }

  function showRackModal(rak) {
    const modalTitle = document.getElementById('modalTitle');
    const modalTableBody = document.getElementById('modalTableBody');

    // Set the title for the modal
    modalTitle.textContent = rak + ' Details';

    // Clear any previous data in the modal body
    modalTableBody.innerHTML = '';

    // Populate table rows based on selected rack
    const rackItems = allItems[rak] || []; // Fallback to an empty array if rack not found
    rackItems.forEach(item => {
      const row = document.createElement('tr');
      row.innerHTML = `
                  <td>${item.kode}</td>
                  <td>${item.nama}</td>
                  <td>${item.tgl_expired}</td>
                  <td>${item.jumlah}</td>
                  <td>${item.status}</td>
              `;
      modalTableBody.appendChild(row);
    });

    // Show the modal
    document.getElementById('itemModal').style.display = 'flex';
  }

  function closeModal() {
    document.getElementById('itemModal').style.display = 'none';
  }

  // Close the modal when clicking outside
  window.onclick = function (event) {
    const modal = document.getElementById('itemModal');
    if (event.target === modal) {
      closeModal();
    }
  }
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