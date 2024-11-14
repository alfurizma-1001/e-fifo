<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Picqer\Barcode\BarcodeGeneratorHTML; // For HTML output
use Picqer\Barcode\BarcodeGeneratorPNG; // For PNG output
class Barcode extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Storage_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // Fetch all data from the shelves table
        $data['shelves'] = $this->Storage_model->get_all_shelves(); // Make sure this method exists in your model

        $this->load->view('partials/head');
        $this->load->view('home/barcode', $data); // Pass data to the view
        $this->load->view('partials/footer');
    }
}
