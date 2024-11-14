<?php
defined('BASEPATH') or exit('No direct script access allowed');
class History extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Storage_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['items'] = $this->Storage_model->get_all_checkout();  // Fetch data from the database
        

        $this->load->view('partials/head');
        $this->load->view('home/history', $data);
        $this->load->view('partials/footer');
    }

    
    

}
