<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usercontroller extends CI_Controller {

	public function index()
	{
		$this->db->order_by('post.idpost', 'DESC');
        $this->db->from('post'); 
        $this->db->join('account', 'account.username = post.username');
        $fetch = $this->db->get();
		$data['berita'] = $fetch->result();
		
		$this->load->view('user/header');
		$this->load->view('user/index', $data);
		$this->load->view('user/footer');
	}
	public function kakilangit()
	{
		$this->load->library('pagination');
		
		$this->db->from('tb_post');
        $this->db->where('kategori', 'kakilangit');
        $raw = $this->db->get();
        $count = count($raw->result());
        //pagination settings
        $config['base_url'] = base_url().'kakilangit/';
        $config['total_rows'] = $count;
        $config['per_page'] = "6";
        $config["uri_segment"] = 2;
        // $choice = $config["total_rows"] / $config["per_page"];
        // $config["num_links"] = floor($choice);
		$config["num_links"] = 4;

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo;';
        $config['last_link'] = '&raquo;';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><span>';
        $config['cur_tag_close'] = '</span></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
		$data['hal'] = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

		
        // $artikel = $this->front_model->get_data_artikel($config["per_page"], $data['hal']);
        
        $this->db->from('tb_post');
        $this->db->where('kategori', 'kakilangit');
        $this->db->order_by('id', 'DESC');
        $this->db->limit($config["per_page"], $data['hal']);
        $fetch = $this->db->get();
        $data['kakilangit'] = $fetch->result();
		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('user/header');
		$this->load->view('user/kakilangit', $data);
		$this->load->view('user/footer');
	}
	public function obyekwisata()
	{
		$this->load->library('pagination');
		
		$this->db->from('tb_post');
        $this->db->where('kategori', 'wisata');
        $raw = $this->db->get();
        $count = count($raw->result());
        //pagination settings
        $config['base_url'] = base_url().'obyekwisata/';
        $config['total_rows'] = $count;
        $config['per_page'] = "6";
        $config["uri_segment"] = 2;
        // $choice = $config["total_rows"] / $config["per_page"];
        // $config["num_links"] = floor($choice);
		$config["num_links"] = 4;

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo;';
        $config['last_link'] = '&raquo;';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><span>';
        $config['cur_tag_close'] = '</span></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
		$data['hal'] = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

		
        // $artikel = $this->front_model->get_data_artikel($config["per_page"], $data['hal']);
        
        $this->db->from('tb_post');
        $this->db->where('kategori', 'wisata');
        $this->db->order_by('id', 'DESC');
        $this->db->limit($config["per_page"], $data['hal']);
        $fetch = $this->db->get();
        $data['wisata'] = $fetch->result();
		$data['pagination'] = $this->pagination->create_links();
		
		$this->load->view('user/header');
		$this->load->view('user/obyekwisata', $data);
		$this->load->view('user/footer');
	}
	public function berita()
	{
		$this->load->library('pagination');
		
		$this->db->from('tb_post');
        $this->db->where('kategori', 'berita');
        $raw = $this->db->get();
        $count = count($raw->result());
        //pagination settings
        $config['base_url'] = base_url().'berita/';
        $config['total_rows'] = $count;
        $config['per_page'] = "6";
        $config["uri_segment"] = 2;
        // $choice = $config["total_rows"] / $config["per_page"];
        // $config["num_links"] = floor($choice);
		$config["num_links"] = 4;

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo;';
        $config['last_link'] = '&raquo;';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&lt;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><span>';
        $config['cur_tag_close'] = '</span></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
		$data['hal'] = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

		
        // $artikel = $this->front_model->get_data_artikel($config["per_page"], $data['hal']);
        
        $this->db->from('tb_post');
        $this->db->where('kategori', 'berita');
        $this->db->order_by('id', 'DESC');
        $this->db->limit($config["per_page"], $data['hal']);
        $fetch = $this->db->get();
        $data['berita'] = $fetch->result();
        $data['pagination'] = $this->pagination->create_links();

		$this->load->view('user/header');
		$this->load->view('user/berita', $data);
		$this->load->view('user/footer');
	}
	public function galery()
	{
		$this->load->view('user/header');
		$this->load->view('user/galery');
		$this->load->view('user/footer');
	}
	public function tentang()
	{
		$this->load->view('user/header');
		$this->load->view('user/tentang');
		$this->load->view('user/footer');
	}
	public function booking()
	{
		$this->load->view('user/header');
		$this->load->view('user/booking');
		$this->load->view('user/footer');
	}

	public function post($id)
	{
		$post = $this->db->get_where('tb_post', array('id' => $id))->row();

        
		$isi = trim(preg_replace('/\s\s+/', ' ', htmlspecialchars_decode(stripcslashes($post->isi))));
		$date=date_create($post->tgl_post);
        
        $data = array(
        	'judul' => $post->judul,
            'cover' => $post->cover,
            'isi' => $isi,
            'tgl' => date_format($date,"d M Y - H:i")
        );
		
		$this->load->view('user/header');
		$this->load->view('user/post-single', $data);
		$this->load->view('user/footer');
	}


}
