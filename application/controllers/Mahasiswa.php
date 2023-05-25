<?php
class Mahasiswa extends CI_Controller
{

    public function index()
    {
        $this->load->view('view-form-mahasiswa');
    }
        
    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tempat' => $this->input->post('tempat'),
            'tanggal' => $this->input->post('tanggal'),
            'alamat' => $this->input->post('alamat'),
            'jekel' => $this->input->post('jekel'),
            'agama' => $this->input->post('agama')
        ];

            $this->load->view('view-data-mahasiswa', $data);
    }
}