<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_NilaiAdmin extends CI_Controller {
	

	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Nilai_Model'));

		// cek session sudah ada/ belum atau user sudah login/ belum, jika sudah maka akan diarahkan ke halaman dashboard
		//if($this->session->has_userdata('username')){redirect('user');}
    }


	public function index()
	{
		//if($this->session->has_userdata('username')){redirect('user');}


		$isi['id'] 			= '';
		$isi['pin'] 		= '';
		$isi['poin'] 		= '';
		
		$isi['data']		= $this->db->get('poin_peserta');
		$this->load->view('nilai/input_nilai_admin',$isi);
	}

 
 
	public function save()
		{	

		$id_dev = '-';


		$key = $this->input->post('pin');


		$data1['id_dev']	= $id_dev;
		$data1['pin'] 		= $this->input->post('pin');
		$data1['poin'] 		= $this->input->post('poin');


		
		$query = $this->Nilai_Model->getdata($key);
			if($query->num_rows()==1){

					$this->Nilai_Model->getinsertpoin($data1);
					echo "<script type='text/javascript'>
			               alert ('Data Tersimpan !');
			      </script>";
			}else{
				echo "<script type='text/javascript'>
		               alert ('Maaf Kode PIN tidak terdaftar !');
		      </script>";
				redirect ('Input_NilaiAdmin', 'refresh');
			}

		redirect ('Input_NilaiAdmin', 'refresh');
		}

}
