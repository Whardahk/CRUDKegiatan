
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poin extends CI_Controller {
	

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

	    $isi['data'] = $this->db->query("SELECT a.pin,b.nama_pes,b.status,SUM(a.poin) AS total,COUNT(a.id_dev) AS developer
										FROM poin_peserta a
										LEFT JOIN peserta b ON a.pin=b.pin
										GROUP BY a.pin ORDER BY SUM(a.poin) DESC");
		$this->load->view('rank/poin',$isi);
	}

}