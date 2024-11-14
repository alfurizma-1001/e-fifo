<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Storage_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_data($data)
    {
        return $this->db->insert('storage', $data); // Make sure 'your_table_name' matches the actual table name
    }
    public function get_data()
    {
        $query = $this->db->get('storage');
        return $query->result_array(); // Return as an array of arrays
    }

    public function get_all_shelves()
    {
        $query = $this->db->get('shelves');
        return $query->result_array(); // Return as an array of arrays
    }

    public function get_all_checkout()
    {
        $query = $this->db->get('checkout');
        return $query->result_array(); // Return as an array of arrays
    }


    public function get_storage_items()
    {
        return $this->db->get('storage')->result_array();
    }

    public function get_item_by_kode($kode)
    {
        return $this->db->get_where('storage', ['kode' => $kode])->row();
    }

    public function transfer_to_shelves($data)
    {
        $this->db->insert('shelves', $data);
    }
    public function update_storage_jumlah($kode, $new_jumlah)
    {
        $this->db->set('jumlah', $new_jumlah);
        $this->db->where('kode', $kode);
        $this->db->update('storage');
    }

    public function get_shelves_item($kode, $rak)
    {
        return $this->db->get_where('shelves', ['kode' => $kode, 'rak' => $rak])->row();
    }

    // Update the quantity of an existing item in the shelves table
    public function update_shelves_jumlah($kode, $rak, $new_quantity)
    {
        $this->db->where(['kode' => $kode, 'rak' => $rak]);
        $this->db->update('shelves', ['jumlah' => $new_quantity]);
    }

    public function get_items_by_rak($rak)
    {
        $this->db->where('rak', $rak);
        $query = $this->db->get('shelves'); // Adjust table name as necessary
        return $query->result_array();
    }

    public function insert_checkout($data)
    {
        return $this->db->insert('checkout', $data);
    }

    public function decrease_shelf_quantity($rak, $kode, $amount)
    {
        $this->db->set('jumlah', 'jumlah - ' . (int) $amount, FALSE);
        $this->db->where('rak', $rak);
        $this->db->where('kode', $kode);
        $this->db->where('jumlah >=', $amount); // Ensure sufficient quantity
        $this->db->update('shelves');

        log_message('debug', "Decrease shelf quantity query: " . $this->db->last_query());

        return $this->db->affected_rows() > 0;
    }
    public function delete_item_from_storage($kode)
    {
        $this->db->where('kode', $kode)
            ->delete('storage');
    }
    public function delete_item_from_shelves($kode, $rak)
    {
        $this->db->where('kode', $kode)
            ->where('rak', $rak)
            ->delete('shelves');
    }
    // Method to retrieve the current quantity in shelves for a specific rak and kode
    public function get_shelf_quantity($rak, $kode)
    {
        $this->db->select('jumlah');
        $this->db->from('shelves');
        $this->db->where('rak', $rak);
        $this->db->where('kode', $kode);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return (int) $query->row()->jumlah;
        }
        return null; // or 0 if you prefer
    }

    public function update_shelves_barcode($kode, $rak, $barcode, $barcode_image)
    {
        $this->db->set('barcode', $barcode);
        $this->db->set('barcode_image', $barcode_image);
        $this->db->where('kode', $kode);
        $this->db->where('rak', $rak);
        $this->db->update('shelves');
    }
}