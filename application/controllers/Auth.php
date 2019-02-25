<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    function __construct()
  	{
        parent::__construct();
    }
      
	public function index()
	{
	        redirect(base_url().'auth/login');
    }
    
    public function login()
	{
        $user = $this->session->userdata('login');
		if($user)
			redirect(base_url().'admin');
		else
		    $this->load->view('paneladmin/login');
    }
    
    public function doLogin()
	{
        $this->load->model('login_model');
        $result = $this->login_model->login_method();
        // print_r($result);
        // echo $this->input->post('username');
        // echo "<br>";
        // echo $this->input->post('password');
        if($result == false)
            redirect(base_url().'auth/login');
        else{
            redirect(base_url().'admin');
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url()."auth/login");
    }
}