<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Home extends CI_Controller
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

        // Dynamically get items for racks 1 through 46 and their variations
        for ($i = 1; $i <= 46; $i++) {
            $data['rak' . $i . '_items'] = $this->get_rak_items($i); // Get items for Rak i
            for ($j = 2; $j <= 3; $j++) {
                $data['rak' . $i . '_' . $j . '_items'] = $this->get_rak_items($i, $j); // Get items for Rak i_j
            }
        }

        $this->load->view('partials/head');
        $this->load->view('home/home', $data);
        $this->load->view('partials/footer');
    }

    private function get_rak_items($rak_number, $variation = 1)
    {
        $this->load->model('Storage_model');
        // Define the rack name based on the number and variation
        $rak_name = 'Rak ' . $rak_number . ($variation > 1 ? '_' . $variation : '');
        return $this->Storage_model->get_items_by_rak($rak_name);
    }

    public function get_rack_items_status() {
        $racks = [];
        
        // Dynamically check racks from 1 to 46 and their variations
        for ($i = 1; $i <= 46; $i++) {
            $racks[$i] = $this->get_rack_item_status($i); // Check status for Rak i
            for ($j = 2; $j <= 3; $j++) {
                $racks[$i . '_' . $j] = $this->get_rack_item_status($i, $j); // Check status for Rak i_j
            }
        }
    
        echo json_encode($racks); // Return as JSON
    }
    
    private function get_rack_item_status($rak_number, $variation = 1) {
        $rak_name = 'Rak ' . $rak_number . ($variation > 1 ? '_' . $variation : '');
        $items = $this->Storage_model->get_items_by_rak($rak_name);
        
        return !empty($items); // Return true if items are present, false otherwise
    }
}
