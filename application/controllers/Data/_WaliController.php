<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class _WaliController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('CheckSession');
        $this->checksession->check_session($this->session->id_admin,$this->session->nama);
        $this->load->model('Data/WaliSiswaModel');
        $this->load->library('Datatables');
    }
    public function index()
    {
        $data['title'] = "Data Wali / Orang Tua";
        $this->load->view('DataWali/index',$data);
        $this->load->view('DataWali/modal-wali');
    }
    public function show_data_wali()
    {
        if ($this->input->is_ajax_request()){
            echo $this->WaliSiswaModel->show_data_wali();
        }
    }
    public function add_wali()
    {
        if ($this->input->is_ajax_request()){
            echo $this->WaliSiswaModel->add_wali($this->input->post());
        }
    }
    public function edit_wali ()
    {
        if ($this->input->is_ajax_request()){
            echo json_encode($this->WaliSiswaModel->edit_wali($this->input->post('id_wali_siswa')));
        }
    }
    public function update_wali ()
    {
        if ($this->input->is_ajax_request()){
            echo $this->WaliSiswaModel->update_wali($this->input->post());
        }
    }
    public function trash_wali()
    {
        if ($this->input->is_ajax_request()){
            echo $this->WaliSiswaModel->trash_wali($this->input->post('id_trash_wali'));
        }
    }

    public function perwalian($id_wali_siswa)
    {
        $data['data_perwalian'] = $this->WaliSiswaModel->data_wali($id_wali_siswa);
        if (!empty($data['data_perwalian'])){
            $data['title'] = "Detail Perwalian Siswa";
            $data['perwalian'] = $this->WaliSiswaModel->perwalian($id_wali_siswa);
            $this->load->view('DataWali/detail_perwalian', $data);
        }else {
            redirect(base_url('data/wali/show'));
        }
    }
}

?>