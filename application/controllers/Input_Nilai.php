<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_Nilai extends CI_Controller {
	

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
		$isi['nilai'] 		= '';
		$isi['catatan'] 	= '';
		
		$isi['data']		= $this->db->get('nilai');
		$this->load->view('nilai/input_nilai',$isi);
	}

 
 
	public function save()
		{	

		$username = $this->session->userdata('username');
		$query1 = $this->db->query("SELECT id_dev FROM user WHERE username = '$username'");
		$row1 = $query1->row();

		if(isset($_POST['steven'])){
			$hid_pin=$this->input->post('pin');
			$hid_nil=$this->input->post('nilai');

			$data['nilai']=$hid_nil;
			$data['pin']=$hid_pin;

			$this->load->view('nilai/input_nilai',$data);
		}
		if (isset($row1)){
	            $id_dev= $row1->id_dev;
	    }


		$key = $this->input->post('pin');
		$data['pin'] 		= $this->input->post('pin');
		$data['nilai'] 		= $this->input->post('nilai');
		$data['catatan'] 	= $this->input->post('catatan');

		$data1['id_dev']	= $id_dev;
		$data1['pin'] 		= $this->input->post('pin');
		$data1['poin'] 		= $this->input->post('poin');


		
		$query = $this->Nilai_Model->getdata($key);
			if($query->num_rows()==1){
				$cek = $this->Nilai_Model->getcheck($key,$id_dev);
				if($cek->num_rows()==1){
					echo "<script type='text/javascript'>
			               alert ('Anda sudah pernah melakukan VOTING !');
			      </script>";
				}else{
					$this->db->set('id_dev',$id_dev);
					$this->db->set('created_on', 'NOW()', false);
					$this->Nilai_Model->getinsert($data,$data1);
					echo "<script type='text/javascript'>
			               alert ('Data Tersimpan !');
			      </script>";
				}	
			}else{
				echo "<script type='text/javascript'>
		               alert ('Maaf Kode PIN tidak terdaftar !');
		      </script>";
				redirect ('Input_Nilai', 'refresh');
			}

		redirect ('Input_Nilai', 'refresh');
		}

}
