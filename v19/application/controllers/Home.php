<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Kolkata");
        error_reporting(0);
		$this->load->model('Model');
	}

	public function index()
	{
        if($this->session->userdata('view')){ }
        else{ $this->Model->analyz('wb'); }

        if($this->uri->segment(3) == 'hs'){
            $data['msg'] = "Submitted";
        }
        $data['row'] = $this->Model->getrow(0,'analyz');
        $data['rows'] = $this->Model->tablelimit('posts','6');
        $this->load->view('home',$data);
	}

    public function messagesubmitt()
    {
        if($this->input->post())
        {
            if($this->session->userdata('user')){$uid=$this->session->userdata('user')['id'];}else{$uid="gust";}
            $array = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('message'),
                'uid' => $uid,
                'status' => "0"
            ];
            if($this->Model->insert('messages',$array))
            {
                if($this->uri->segment(3) == 'h')
                {
                    redirect(base_url().'index.php/home/index/hs');
                }
                elseif($this->uri->segment(3) == 'c')
                {
                    redirect(base_url().'index.php/contact/index/cs');
                }
            }
        }
        else
        {
            $this->index();
        }
    }

}