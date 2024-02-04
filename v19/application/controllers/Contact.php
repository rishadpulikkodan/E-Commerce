<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
        if($this->uri->segment(3) == 'cs'){
            $data['msg'] = "Submitted";
            $this->load->view('contact',$data);
        }
        else{
            $this->load->view('contact');
        }
	}

}