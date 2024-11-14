<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Picqer\Barcode\BarcodeGeneratorHTML; // For HTML output
use Picqer\Barcode\BarcodeGeneratorPNG; // For PNG output
class Add_item extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Storage_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

    
        $this->load->view('partials/head');
        $this->load->view('home/add_item',);
        $this->load->view('partials/footer');
    }

    public function store_data()
    {
        // Get input data from form
        $data = array(
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'tgl_expired' => $this->input->post('tgl_expired'),
            'jumlah' => $this->input->post('jumlah'),
            'status' => $this->input->post('status')
        );

        // Call model to insert data
        if ($this->Storage_model->insert_data($data)) {
            // Set flashdata for success message
            $this->session->set_flashdata('success', 'Data successfully inserted!');
            redirect('home'); // Redirect back to the main page
        } else {
            echo "Failed to insert data";
        }
    }

   
}
