<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	

	public function __construct()
    {
        parent::__construct();

       // cek session sudah ada/ belum atau user sudah login/ belum, jika belum maka akan diarahkan ke halaman dashboard
		if(!$this->session->has_userdata('username')){redirect(base_url());}
    }

	public function index()
	{

		$isi['data']		 = $this->db->get('tb_users');
		$this->load->view('dashboard',$isi);
	}

}
