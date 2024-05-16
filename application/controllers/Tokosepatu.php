<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tokosepatu extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Toko_Sepatu_Model');
    }
    
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama Pembeli',
        'required', [
            'required' => 'Nama Pembeli Harus Diisi'
        ]);
        $this->form_validation->set_rules('no_hp', 'Nomor HP',
        'required', [
            'required' => 'Nomor HP Harus Diisi'
        ]);
        if($this->form_validation->run() == false){
        $data['merek']=['Nike', 'Adidas', 'Kickers', 'Eiger', 'Bucherri'];
        $this->load->view('Tokosepatu/v_input', $data);
        }else{
            $data = [
                'nama'=> $this->input->post('nama'),
                'no_hp'=> $this->input->post('no_hp'),
                'merek'=> $this->input->post('merek'),
                'ukuran'=> $this->input->post('ukuran'),
                'harga'=> $this->Toko_Sepatu_Model->price($this->input->post('nama'),)
            ];
            $this->load->view('Tokosepatu/v_output', $data);
        }
    }
}

    
