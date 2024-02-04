<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		
		$user = $this->session->userdata('user');
		if($user && $user['privilege'] == array_keys(return_privilage())[1]) {
			redirect('home','refresh');
		}
		else if($user && $user['privilege'] == array_keys(return_privilage())[0]){
			redirect('back','refresh');
		}
		else{$this->load->model('Model');} 

	}

	public function index()
	{
		// $this->load->view('back/create');
		$this->load->view('back/login');
	}

	public function submitt()
	{
		if($this->input->post())
		{
			if($this->Model->login() === true){
				redirect('back/index','refresh');
			}
			else
			{
				$data['msg'] = 'incorrect';
				$this->load->view('back/login',$data);
			}
		}
		else
		{
			$data['msg'] = 'incorrect';
			$this->load->view('back/login',$data);
		}
	}

}
