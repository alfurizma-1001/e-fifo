<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Picqer\Barcode\BarcodeGeneratorHTML; // For HTML output
use Picqer\Barcode\BarcodeGeneratorPNG; // For PNG output

class Transfer_between_rak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Storage_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['storage_items'] = $this->Storage_model->get_storage_items();
        $data['items'] = $this->Storage_model->get_data();  // Fetch data from the database
        // Prepare the rak items data
        $rakItemsData = [];
        for ($i = 1; $i <= 46; $i++) {
            $rakItemsData["Rak {$i}"] = $this->get_rak_items("Rak {$i}");
            $rakItemsData["Rak {$i}_2"] = $this->get_rak_items("Rak {$i}_2");
            $rakItemsData["Rak {$i}_3"] = $this->get_rak_items("Rak {$i}_3");
        }
        $data['rakItems'] = json_encode($rakItemsData); // Pass the encoded data to the view

        $this->load->view('partials/head');
        $this->load->view('home/transfer_between_rak', $data);
        $this->load->view('partials/footer');
    }

    public function transfer_between_racks()
    {
        // Validate input
        $this->form_validation->set_rules('kode', 'Kode Barang', 'required');
        $this->form_validation->set_rules('tgl_expired', 'Tanggal Expired', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('jumlah_transfer', 'Jumlah Transfer', 'required|greater_than[0]');
        $this->form_validation->set_rules('source_rak', 'Source Rak', 'required');
        $this->form_validation->set_rules('destination_rak', 'Destination Rak', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->index(); // Load the view again with error messages
        } else {
            $kode = $this->input->post('kode');
            $jumlah_transfer = (int) $this->input->post('jumlah_transfer');
            $source_rak = $this->input->post('source_rak');
            $destination_rak = $this->input->post('destination_rak');

            // Get the item from the source rack
            $source_item = $this->Storage_model->get_shelves_item($kode, $source_rak);

            if ($source_item && $source_item->jumlah >= $jumlah_transfer) {
                // Generate the barcode
                $barcodeContent = preg_replace('/[^A-Za-z0-9]/', '', $kode . $destination_rak); // Concatenate and sanitize
                $generator = new BarcodeGeneratorPNG(); // Instantiate the barcode generator
                $barcodeImage = $generator->getBarcode($barcodeContent, $generator::TYPE_CODE_128);

                // Define the filename to save the barcode image
                $barcodeImageName = $barcodeContent . '.png'; // Just the filename
                $barcodeImagePath = 'C:/xampp/htdocs/e-fifo/downloads/' . $barcodeImageName; // Full path to save the image

                // Save the barcode image to the defined path
                file_put_contents($barcodeImagePath, $barcodeImage);

                // Reduce the quantity from the source rack
                $new_source_quantity = $source_item->jumlah - $jumlah_transfer;
                $this->Storage_model->update_shelves_jumlah($kode, $source_rak, $new_source_quantity);

                // Check if the item exists in the destination rack
                $destination_item = $this->Storage_model->get_shelves_item($kode, $destination_rak);

                if ($destination_item) {
                    // If the item exists in the destination rack, update the quantity
                    $new_destination_quantity = $destination_item->jumlah + $jumlah_transfer;
                    $this->Storage_model->update_shelves_jumlah($kode, $destination_rak, $new_destination_quantity);

                    // Update barcode and barcode_image in destination rack item
                    $this->Storage_model->update_shelves_barcode($kode, $destination_rak, $barcodeContent, $barcodeImageName);
                } else {
                    // If the item doesn't exist in the destination rack, create a new record
                    $destination_data = [
                        'kode' => $source_item->kode,
                        'nama' => $source_item->nama,
                        'tgl_expired' => $source_item->tgl_expired,
                        'status' => $source_item->status,
                        'jumlah' => $jumlah_transfer,
                        'rak' => $destination_rak,
                        'barcode' => $barcodeContent, // Add the combined kode and rak here
                        'barcode_image' => $barcodeImageName, // Store only the filename
                    ];
                    $this->Storage_model->transfer_to_shelves($destination_data);
                }

                // If the source rack's quantity reaches zero, delete the item from the source rack
                if ($new_source_quantity == 0) {
                    $this->Storage_model->delete_item_from_shelves($kode, $source_rak);
                }

                // Set a success message
                $this->session->set_flashdata('success', 'Item transferred successfully with barcode: ' . $barcodeContent);
            } else {
                $this->session->set_flashdata('error', 'Insufficient quantity in the source rack or item not found.');
            }

            redirect('home');
        }
    }

    private function get_rak_items($rakName)
    {
        $this->load->model('Storage_model');
        return $this->Storage_model->get_items_by_rak($rakName);
    }
}
