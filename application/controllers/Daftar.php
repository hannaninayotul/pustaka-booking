<?php 
class Daftar extends CI_Controller 
{ 
    public function index() 
    { 
        $this->load->view('view-form-daftar'); 
    } 
    public function cetak() 
    { 
        $this->form_validation->set_rules('nim', 'nomor nim', 
        'required|min_length[3]|numeric', [ 
            'required' => 'nim Harus diisi', 
            'min_lenght' => 'nim terlalu pendek',
            'numeric' => 'Harus angka'
        ]); 
        
        $this->form_validation->set_rules('nama', 'Nama lengkap', 
        'required|min_length[3]', [ 
            'required' => 'Nama Lengkap Harus diisi', 
            'min_lenght' => 'Nama terlalu pendek' 
        ]); 
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 
        'required|min_length[3]', [ 
            'required' => 'Tempat Lahir Harus diisi', 
            'min_lenght' => 'Tempat lahir tidak lengkap' 
        ]); 
        $this->form_validation->set_rules('alamat', 'alamat lengkap', 
        'required|min_length[3]', [ 
            'required' => 'alamat Harus diisi', 
            'min_lenght' => 'alamat tidak lengkap' 
        ]); 
        
        if ($this->form_validation->run() != true) { 
            $this->load->view('view-form-daftar'); 
        } else {
        $data = [ 
            'nim' => $this->input->post('nim'), 
            'nama' => $this->input->post('nama'), 
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => $this->input->post('tempat_lahir') ,
            'alamat' => $this->input->post('alamat') 
        ]; 
        $this->load->view('view-data-daftar', $data); 
    }
    } 
}