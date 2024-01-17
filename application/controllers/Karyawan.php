<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public function index()
	{
        $data['title'] = "Karyawan";
        $data['karyawan'] = $this->model_karyawan->getAllKaryawan();

		$this->load->view('template/header', $data);
		$this->load->view('data/karyawan', $data);
		$this->load->view('template/footer');
	}
	public function addKaryawan()
    {
        $data['title'] = "Add Data karyawan";

        $this->form_validation->set_rules('nama', 'Nama karyawan', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Telpon', 'required|numeric');
        $this->form_validation->set_rules('tmpt_tinggal', 'Tempat Tinggal', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('data/karyawan_add', $data);
            $this->load->view('template/footer');
        } else {
            $this->model_karyawan->addkaryawan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">karyawan Di Tambahkan !!!</div>');
            redirect('karyawan');
        }
    }

    public function hapuskaryawan($id)
    {
        $this->model_karyawan->hapuskaryawan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data karyawan di Hapus !!!</div>');
        redirect('karyawan');
    }
    public function editkaryawan($id)
    {
        $data['title'] = "Edit Data karyawan";
        $data['karyawan'] = $this->model_karyawan->getkaryawanId($id);

        $this->form_validation->set_rules('nama', 'Nama karyawan', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Telpon', 'required|numeric');
        $this->form_validation->set_rules('tmpt_tinggal', 'Tempat Tinggal', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('data/karyawan_edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->model_karyawan->editkaryawan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">karyawan Di Edit !!!</div>');
            redirect('karyawan');
        }
    }
}
