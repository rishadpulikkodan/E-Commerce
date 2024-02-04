<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gm extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Model');
	}

	public function index()
	{
        if($this->session->userdata('view')){ }
        else{ $this->Model->analyz('gm'); }
        redirect('home');
	}
}