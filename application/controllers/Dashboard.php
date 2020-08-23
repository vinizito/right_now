<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index () {
		$this->load->model('entregas_model');
		$data['entregas'] = $this->entregas_model->index();

		$this->load->view('templates/header');
    $this->load->view('templates/nav-top');
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/footer');
    $this->load->view('templates/js');
	}

	public function details ($id) { 
		$this->load->model('entregas_model');
		$data['entrega'] = $this->entregas_model->show($id);

		$this->load->view('templates/header');
		$this->load->view('templates/nav-top');
		$this->load->view('pages/delivery_details', $data);
		$this->load->view('templates/footer');
		$this->load->view('templates/js');
	}
}
