
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rank extends CI_Controller {
	

	public function __construct()
    {
        parent::__construct();

		// cek session sudah ada/ belum atau user sudah login/ belum, jika sudah maka akan diarahkan ke halaman dashboard
		//if($this->session->has_userdata('username')){redirect('user');}
    }

	public function index()
	{

		// cek session sudah ada/ belum atau user sudah login/ belum, jika sudah maka akan diarahkan ke halaman dashboard
		//if($this->session->has_userdata('username')){redirect('dashboard');}

	    $isi['data'] = $this->db->query("SELECT b.kategori, b.nama_apl,SUM(a.nilai) AS total, COUNT(a.pin) AS pengunjung, 
	    							SUM(a.nilai)/COUNT(a.pin) AS nilai, c.username FROM nilai a
									LEFT JOIN tim b ON a.id_dev = b.id_dev
									LEFT JOIN user c ON c.id_dev = b.id_dev
									GROUP BY a.id_dev ORDER BY SUM(a.nilai)/COUNT(a.pin) DESC");



		$this->load->view('rank/rank',$isi);
	}

}