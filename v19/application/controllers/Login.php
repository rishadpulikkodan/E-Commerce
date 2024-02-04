<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
		error_reporting(0);
		$this->load->model('Model');
	}

	public function index()
	{
	    $user = $this->session->userdata('user');
	    if($user && $user['privilege'] == array_keys(return_privilage())[1])
	    {
	      redirect('home','refresh');
	    }
	    else
	    {
	      $data['direct'] = "direct";
	      $this->load->view("login",$data);
	    }
	}

	public function loginsubmit()
	{
	    $user = $this->session->userdata('user');
	    if($user && $user['privilege'] == array_keys(return_privilage())[1])
	    {
	      redirect('home','refresh');
	    }
	    else
	    {
			if($this->input->post())
			{
				if($this->Model->login() === true){
					header('Location: '.$_SERVER['REQUEST_URI']);
					// redirect('home','refresh');
				}
				else
				{
					$data['direct'] = "direct";
					$data['lmsg'] = 'incorrect';
					$this->load->view('login',$data);
				}
			}
			else
			{
				$data['direct'] = "direct";
				$data['lmsg'] = 'null values';
				$this->load->view('login',$data);
			}
	    }
	}

	public function createaccount()
	{
		if($this->input->post())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$cpassword = $this->input->post('cpassword');

			if($password != $cpassword)
			{
				$data['direct'] = "direct";
				$data['smsg'] = "Password doesn't match !";
				$this->load->view('login',$data);
			}
			elseif($this->Model->check() == false)
			{
				if($this->Model->login() === true){
					header('Location: '.$_SERVER['REQUEST_URI']);
					// redirect('home','refresh');
				}
				else{
					$data['direct'] = "direct";
					$data['smsg'] = $username." is already exist";
					$this->load->view('login',$data);
				}
			}
			else
			{
				$array = [
		            'privilege' => "852",
		            'username' => $username,
		            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
		            'name' => "",
		            'phone' => "",
		            'place' => "",
		            'address' => ""
				];
				$resultid = $this->Model->insert('users',$array);
				if($resultid)
				{
					$row = $this->Model->getrow($resultid,'users');
					$user = [
		           		  'id' => $row->id,
		                'privilege' => $row->privilege,
		                'username' => $row->username,
		                'name' => $row->name,
		                'phone' => $row->phone,
		                'place' => $row->place,
		                'address' => $row->address
		            ];
		            $this->session->set_userdata('user', $user);
		            header('Location: '.$_SERVER['REQUEST_URI']);
		            // redirect('home','refresh');
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'index.php/home','refresh');
	}

}
