<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontroller extends CI_Controller {
	function __construct()
  	{
		parent::__construct();
		$this->user = $this->session->userdata('login');
		if (!$this->user) {
			$this->session->sess_destroy();
			redirect(base_url().'auth/login');
		}
	}
	  
	public function index()
	{
		$data = array(
			'users' => $this->db->count_all_results('account'),
			'posts' => $this->db->count_all_results('post')
		);
		$this->load->view('paneladmin/header');
		$this->load->view('paneladmin/index', $data);
		$this->load->view('paneladmin/footer');
	}
	
	public function berita()
	{
		$this->db->order_by('post.idpost', 'DESC');
        $this->db->from('post'); 
        $this->db->join('account', 'account.username = post.username');
        $fetch = $this->db->get();
		$data['berita'] = $fetch->result();

		$this->load->view('paneladmin/header');
		$this->load->view('paneladmin/berita', $data);
		$this->load->view('paneladmin/footer');
	}

	public function tambahberita()
	{
		$this->load->view('paneladmin/header');
		$this->load->view('paneladmin/tambahberita');
		$this->load->view('paneladmin/footer');
	}

	public function user()
	{
        $this->db->from('account'); 
        $fetch = $this->db->get();
		$data['user'] = $fetch->result();

		$this->load->view('paneladmin/header');
		$this->load->view('paneladmin/user', $data);
		$this->load->view('paneladmin/footer');
	}

	public function tambahuser()
	{
		$this->load->view('paneladmin/header');
		$this->load->view('paneladmin/tambahuser');
		$this->load->view('paneladmin/footer');
	}


}
