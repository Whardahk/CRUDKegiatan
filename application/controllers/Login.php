<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	


	public function index()
	{
		// cek session sudah ada/ belum atau user sudah login/ belum, jika sudah maka akan diarahkan ke halaman dashboard
		//if($this->session->has_userdata('username')){redirect('dashboard');}

		$this->load->view('tampilah_login');
	}

}