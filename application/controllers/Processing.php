<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Processing extends CI_Controller {

	public function index()
	{
		echo "Fuahahahaha";
	}

	public function addPost(){
        // $config['upload_path']="./assets/uploads";
        // $config['allowed_types']='gif|jpg|png|jpeg';
        // $this->load->library('upload',$config);
        // if($this->upload->do_upload("cover")){
            // $nama_file = $this->upload->data('file_name');
			// $data = array('upload_data' => $this->upload->data());
			
			// $get_judul_lcase = strtolower($this->input->post('judul'));
			// $explode = explode(" ", $get_judul_lcase);
            // $slug = implode("-", $explode);
            // $slug = url_title($get_judul_lcase);

            $data = array(
                'title' => $this->input->post('judul', TRUE),
				'content' => htmlspecialchars(str_replace('"', "'",$this->input->post('isi'))),
                'date' => date('Y-m-d H:i:s'),
                'username' => $this->session->login['username']
            );
            $result= $this->db->insert('post', $data);
            if ($result == TRUE) {
                echo "ok";
            } else
                echo "fail";
        // } else {
        //     echo "upload fail";
        // }

    }

    public function addUser(){
            $username = $this->input->post('username');

            $this->db->from('account'); 
            $this->db->where('username', $username);
            $fetch = $this->db->get()->num_rows();

            if ($fetch > 0) {
                echo "duplicate";
                exit;
            }

            $password = sha1($_POST['password']);
		    $password_hash = password_hash($password, PASSWORD_DEFAULT);

            $data = array(
                'username' => $username,
				'name' => $this->input->post('name'),
                'password' => $password_hash,
                'role' => 'author'
            );
            $result= $this->db->insert('account', $data);
            if ($result == TRUE) {
                echo "ok";
            } else
                echo "fail";
        // } else {
        //     echo "upload fail";
        // }

    }
}
