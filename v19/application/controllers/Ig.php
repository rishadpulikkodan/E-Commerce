<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ig extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
	}

	public function index()
	{
        if($this->session->userdata('view')){ }
        else{ $this->load->model('Model'); }
		$this->Model->analyz('ig');
		redirect('home');
	}
}