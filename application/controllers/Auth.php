<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
        $data['title'] = "Login";
        // $data['janjiTemu'] = $this->model_janjiTemu->getAll();

		// $this->load->view('template/header', $data);
		$this->load->view('data/login', $data);
		// $this->load->view('template/footer');
	}
}
