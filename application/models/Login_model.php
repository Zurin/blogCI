<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

		public function login_method(){
				// Menghindari injectsi hacking
				$username = $this->security->xss_clean($this->input->post('username'));
				$password = $this->security->xss_clean($this->input->post('password'));
				$this->db->where('username', $username);
				$query = $this->db->get('account');
				// print_r($query->num_rows());
				// Cek apakah user tersebut ada??
				if($query->num_rows() > 0)
				{
						//Jika user ada maka buat sessi
                        $row = $query->row();
                        // echo $row->password."<br>";
                        // echo sha1($password)."<br>";
						if(password_verify(sha1($password), $row->password)){
						    $data = array(
								'username' => $row->username,
								'name' => $row->name,
								'role' => $row->role
							);
							$this->session->set_userdata("login", $data);
                            return true;
						} else {
                            return false;
                        }
				} else{
                    // Jika tidak maka data tidak ditemukan
                    return false;
				}
		}

}