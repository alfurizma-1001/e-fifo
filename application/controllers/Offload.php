<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Offload extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Storage_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->model('Storage_model');

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
        $this->load->view('home/offload', $data);
        $this->load->view('partials/footer');
    }

    public function release_item()
    {
        // Load form validation library
        $this->form_validation->set_rules('release_kode', 'Kode', 'required');
        $this->form_validation->set_rules('jumlah_checkout', 'Jumlah Checkout', 'required|greater_than[0]');
        $this->form_validation->set_rules('destination', 'Destination', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('home'); // Reload the page with validation errors
        } else {
            // Retrieve form data
            $kode = $this->input->post('release_kode');
            $nama = $this->input->post('release_nama');  // Retrieve the nama field
            $jumlah_checkout = (int) $this->input->post('jumlah_checkout');
            $destination = $this->input->post('destination');
            $tgl_expired = $this->input->post('release_tgl_expired');
            $status = $this->input->post('release_status');
            $selectedRak = $this->input->post('release_rak');

            // Insert data into the checkout table
            $insertData = [
                'kode' => $kode,
                'nama' => $nama,  // Add nama to the insert data array
                'jumlah' => $jumlah_checkout,
                'tgl_expired' => $tgl_expired,
                'status' => $status,
                'destination' => $destination
            ];

            if ($this->Storage_model->insert_checkout($insertData)) {
                log_message('debug', "Successfully inserted data into checkout table for kode $kode.");
            } else {
                log_message('error', "Failed to insert data into checkout table. Error: " . $this->db->error());
            }

            // Reduce item quantity in shelves table for the selected rak and kode
            if ($this->Storage_model->decrease_shelf_quantity($selectedRak, $kode, $jumlah_checkout)) {
                log_message('debug', "Successfully decreased shelf quantity in shelves table for kode $kode in rak $selectedRak.");

                // Check if the updated quantity is zero and delete the item if so
                $updated_quantity = $this->Storage_model->get_shelf_quantity($selectedRak, $kode);
                if ($updated_quantity === 0) {
                    $this->Storage_model->delete_item_from_shelves($kode, $selectedRak);
                    log_message('debug', "Item with kode $kode in rak $selectedRak deleted due to zero quantity.");
                }
            } else {
                log_message('error', "Failed to decrease shelf quantity. Error: " . $this->db->error());
            }

            // Handle additional box if selected
            if ($this->input->post('add_another_box') === 'yes') {
                $additional_kode = $this->input->post('additional_kode');
                $additional_nama = $this->input->post('additional_nama'); // Retrieve additional nama
                $jumlah_tambahan = (int) $this->input->post('jumlah_tambahan');
                $additional_tgl_expired = $this->input->post('additional_tgl_expired');
                $additional_status = $this->input->post('additional_status');

                // Insert additional data into the checkout table
                $additionalData = [
                    'kode' => $additional_kode,
                    'nama' => $additional_nama, // Add additional nama to the insert data array
                    'jumlah' => $jumlah_tambahan,
                    'tgl_expired' => $additional_tgl_expired,
                    'status' => $additional_status,
                    'destination' => $destination
                ];

                if ($this->Storage_model->insert_checkout($additionalData)) {
                    log_message('debug', "Successfully inserted additional data into checkout table for kode $additional_kode.");
                } else {
                    log_message('error', "Failed to insert additional data into checkout table. Error: " . $this->db->error());
                }

                // Reduce additional item quantity in shelves table
                if ($this->Storage_model->decrease_shelf_quantity($selectedRak, $additional_kode, $jumlah_tambahan)) {
                    log_message('debug', "Successfully decreased shelf quantity for additional item in shelves table for kode $additional_kode in rak $selectedRak.");

                    // Check if the updated quantity for the additional item is zero and delete the item if so
                    $updated_additional_quantity = $this->Storage_model->get_shelf_quantity($selectedRak, $additional_kode);
                    if ($updated_additional_quantity === 0) {
                        $this->Storage_model->delete_item_from_shelves($additional_kode, $selectedRak);
                        log_message('debug', "Additional item with kode $additional_kode in rak $selectedRak deleted due to zero quantity.");
                    }
                } else {
                    log_message('error', "Failed to decrease shelf quantity for additional item. Error: " . $this->db->error());
                }
            }

            // Success message
            $this->session->set_flashdata('success', 'Item released successfully!');
            redirect('home');
        }
    }

    private function get_rak_items($rakName)
    {
        $this->load->model('Storage_model');
        return $this->Storage_model->get_items_by_rak($rakName);
    }
}
