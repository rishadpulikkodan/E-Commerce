<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branches extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		$this->load->model('Model');
	}

	public function index()
	{
        if($this->session->userdata('view')){ }
        else{ $this->Model->analyz('wb'); }
    	$data['rows'] = $this->Model->table('branches');
        $this->load->view('branches',$data);
	}

}