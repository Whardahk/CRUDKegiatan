<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
 
	public function __construct()
    {
        parent::__construct();
        //load model Admin
        $this->load->model('Admin');
    }

	public function index()
	{
		// cek session sudah ada/ belum atau user sudah login/ belum, jika sudah maka akan diarahkan ke halaman dashboard
		if($this->session->has_userdata('username')){redirect('dashboard');}

		$this->load->view('tampilah_login');
	}

	public function getlogin()
	{
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$password = MD5($this->input->post('password', TRUE));
	
			$array = array('username' => $username, 'password' => $password);
			$this->db->where($array);
			$this->db->limit(1);
			$data = $this->db->get('tb_users');
			if($data->num_rows()>0){
				$query = $this->db->query("UPDATE tb_users SET login = 1 where username = '$username'");
				$this->session->set_userdata('username',$username);
				
				redirect('dashboard');
			}else{
				echo "<script type='text/javascript'>
		               alert ('Maaf Username Dan Password Anda Salah !');
		      </script>";
				redirect (base_url(''), 'refresh');
			}

	}
	public function logout()
	{

		$username = $this->session->userdata('username');
		$query = $this->db->query("UPDATE tb_users SET login = 0 where username = '$username'");
		session_destroy();
		redirect (base_url(''), 'refresh');
	}
	
}
