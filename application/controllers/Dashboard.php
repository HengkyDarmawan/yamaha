<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
        $data['title'] = "Dashboard";
        $data['janjiTemu'] = $this->model_janjiTemu->getAll();

		$this->load->view('template/header', $data);
		$this->load->view('data/index', $data);
		$this->load->view('template/footer');
	}
	public function accepted($id)
	{
		$this->db->set('status', 'accepted');
		$this->db->where('id_janji', $id);
		$this->db->update('janji_temu');
		// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Keluarga Di Approve !!!</div>');
		redirect('dashboard');
	}
	public function rejected($id)
	{
		$this->db->set('status', 'rejected');
		$this->db->where('id_janji', $id);
		$this->db->update('janji_temu');
		// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Keluarga Di Reject !!!</div>');
		redirect('dashboard');
	}
}
