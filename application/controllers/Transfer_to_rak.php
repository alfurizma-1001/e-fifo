<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Picqer\Barcode\BarcodeGeneratorHTML; // For HTML output
use Picqer\Barcode\BarcodeGeneratorPNG; // For PNG output

class Transfer_to_rak extends CI_Controller
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
        $data['rak1_items'] = $this->get_rak1_items(); // Add this line to get Rak 1 items
        $data['rak2_items'] = $this->get_rak2_items(); // Add this line to get Rak 1 items
        $data['rak3_items'] = $this->get_rak3_items(); // Add this line to get Rak 1 items
        $data['rak4_items'] = $this->get_rak4_items(); // Add this line to get Rak 1 items
        $data['rak5_items'] = $this->get_rak5_items(); // Add this line to get Rak 1 items
        $data['rak6_items'] = $this->get_rak6_items(); // Add this line to get Rak 1 items
        $data['rak7_items'] = $this->get_rak7_items(); // Add this line to get Rak 1 items
        $data['rak8_items'] = $this->get_rak8_items(); // Add this line to get Rak 1 items
        $data['rak9_items'] = $this->get_rak9_items(); // Add this line to get Rak 1 items

        $this->load->view('partials/head');
        $this->load->view('home/transfer_to_rak', $data);
        $this->load->view('partials/footer');
    }


    public function transfer_to_shelves()
    {
        // Your existing code
        $kode = $this->input->post('kode');
        $jumlah_transfer = (int) $this->input->post('jumlah_transfer');
        $rak = $this->input->post('rak');

        // Get the storage item details
        $storage_item = $this->Storage_model->get_item_by_kode($kode);

        if ($storage_item && $storage_item->jumlah >= $jumlah_transfer) {
            // Check if the item already exists in the specified shelf (rak)
            $shelves_item = $this->Storage_model->get_shelves_item($kode, $rak);

            // Use both kode and rak to generate the barcode
            $barcodeContent = preg_replace('/[^A-Za-z0-9]/', '', $kode . $rak); // Concatenate and sanitize

            // Generate the barcode image
            $generator = new BarcodeGeneratorPNG(); // Instantiate the barcode generator
            $barcodeImage = $generator->getBarcode($barcodeContent, $generator::TYPE_CODE_128);

            // Define the filename to save the barcode image
            $barcodeImageName = $barcodeContent . '.png'; // Just the filename
            $barcodeImagePath = 'C:/xampp/htdocs/e-fifo/downloads/' . $barcodeImageName; // Full path to save the image

            // Save the barcode image to the defined path
            file_put_contents($barcodeImagePath, $barcodeImage);

            if ($shelves_item) {
                // If the item exists, update the quantity
                $new_quantity = $shelves_item->jumlah + $jumlah_transfer;
                $this->Storage_model->update_shelves_jumlah($kode, $rak, $new_quantity);
            } else {
                // If the item doesn't exist in the specified rak, create a new record
                $shelves_data = [
                    'kode' => $storage_item->kode,
                    'nama' => $storage_item->nama,
                    'tgl_expired' => $storage_item->tgl_expired,
                    'status' => $storage_item->status,
                    'jumlah' => $jumlah_transfer,
                    'rak' => $rak,
                    'barcode' => $barcodeContent, // Add the combined kode and rak here
                    'barcode_image' => $barcodeImageName, // Store only the filename
                ];
                $this->Storage_model->transfer_to_shelves($shelves_data);
            }

            // Update storage quantity (decrease by jumlah_transfer)
            $new_storage_quantity = $storage_item->jumlah - $jumlah_transfer;
            $this->Storage_model->update_storage_jumlah($kode, $new_storage_quantity);

            // Check if the storage quantity has reached zero, and delete the item if true
            if ($new_storage_quantity == 0) {
                $this->Storage_model->delete_item_from_storage($kode);
            }

            $this->session->set_flashdata('success', 'Item transferred successfully! Barcode: ' . $barcodeContent);
        } else {
            $this->session->set_flashdata('error', 'Insufficient quantity or item not found.');
        }

        redirect('home');
    }



    private function get_rak1_items()
    {
        $this->load->model('Storage_model');
        return $this->Storage_model->get_items_by_rak('Rak 1');
    }
    private function get_rak2_items()
    {
        $this->load->model('Storage_model');
        return $this->Storage_model->get_items_by_rak('Rak 2');
    }
    private function get_rak3_items()
    {
        $this->load->model('Storage_model');
        return $this->Storage_model->get_items_by_rak('Rak 3');
    }
    private function get_rak4_items()
    {
        $this->load->model('Storage_model');
        return $this->Storage_model->get_items_by_rak('Rak 4');
    }
    private function get_rak5_items()
    {
        $this->load->model('Storage_model');
        return $this->Storage_model->get_items_by_rak('Rak 5');
    }
    private function get_rak6_items()
    {
        $this->load->model('Storage_model');
        return $this->Storage_model->get_items_by_rak('Rak 6');
    }
    private function get_rak7_items()
    {
        $this->load->model('Storage_model');
        return $this->Storage_model->get_items_by_rak('Rak 7');
    }
    private function get_rak8_items()
    {
        $this->load->model('Storage_model');
        return $this->Storage_model->get_items_by_rak('Rak 8');
    }
    private function get_rak9_items()
    {
        $this->load->model('Storage_model');
        return $this->Storage_model->get_items_by_rak('Rak 9');
    }
}
