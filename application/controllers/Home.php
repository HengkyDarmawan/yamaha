<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data['karyawan'] = $this->model_karyawan->getAllKaryawan();
		$this->load->view('home/index', $data);
	}
	public function simpan()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
		$this->form_validation->set_rules('date', 'Tanggal', 'required');
		$this->form_validation->set_rules('time', 'Jam', 'required');
        $this->form_validation->set_rules('karyawan_id', 'Nama Karyawan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home/index');
			echo validation_errors();
		}else{
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama')),
				'email' => htmlspecialchars($this->input->post('email')),
				'phone' => htmlspecialchars($this->input->post('phone')),
				'date' => htmlspecialchars($this->input->post('date')),
				'time' => htmlspecialchars($this->input->post('time')),
				'karyawan_id' => htmlspecialchars($this->input->post('karyawan_id')),
				'message' => htmlspecialchars($this->input->post('message')),
				'status' => 'review',
			  ];
		
			$this->db->insert('janji_temu', $data);
		
			redirect('home');
		}
	}
}
