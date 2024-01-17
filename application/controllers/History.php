<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	public function index()
	{
        $data['title'] = "History";
        $data['janjiTemuAcc'] = $this->model_janjiTemu->getAllAcc();

		$this->load->view('template/header', $data);
		$this->load->view('data/history', $data);
		$this->load->view('template/footer');
	}
}
