<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");

		$user = $this->session->userdata('user');
		if($user && $user['privilege'] == array_keys(return_privilage())[1])  {
			$this->load->model('Model');
		}else{redirect('products','refresh');}
	}

	public function index()
	{ $user = $this->session->userdata('user');
		$data['row'] = $this->Model->getrow($user['id'],'users');
        $this->load->view('profile',$data);
	}

	public function submit()
	{
        if($this->input->post())
        {
        	$id = $this->session->userdata('user')['id'];
            $this->Model->editrowa($id,'users','name',$this->input->post('name'));
            $this->Model->editrowa($id,'users','phone',$this->input->post('phone'));
            $this->Model->editrowa($id,'users','place',$this->input->post('place'));
            $this->Model->editrowa($id,'users','address',$this->input->post('address'));
            redirect(base_url().'index.php/products/orders');
        }
        else
        {
            $this->index();
        }
	}


}