<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung extends CI_Controller {
	

	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('Pengunjung_Model'));

		// cek session sudah ada/ belum atau user sudah login/ belum, jika sudah maka akan diarahkan ke halaman dashboard
		//if($this->session->has_userdata('username')){redirect('user');}
    }


	public function index()
	{
		//if($this->session->has_userdata('username')){redirect('user');}

		$isi['id'] 			= '';
		$isi['pin'] 		= '';
		$isi['nama_pes']	= '';
		$isi['email_pes'] 	= '';
		$isi['status'] 		= '';
		
		$isi['data']		= $this->db->get('peserta');
		$this->load->view('pengunjung/peserta',$isi);
	}


	public function input_peserta()
	{
		$isi['id'] 			= '';
		$isi['pin'] 		= '';
		$isi['nama_pes']	= '';
		$isi['email_pes'] 	= '';
		$isi['status'] 		= '';

		$isi['data']		= $this->db->get('peserta');
		$this->load->view('pengunjung/input_peserta',$isi);
	}
 
 

	public function edit()
	{
		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$data = $this->db->get('peserta');
		if($data->num_rows()>0){
			foreach($data->result() as $row){
				$isi['id'] 			= $row->id;
				$isi['pin'] 		= $row->pin;
				$isi['nama_pes'] 	= $row->nama_pes;
				$isi['email_pes'] 	= $row->email_pes;
				$isi['status'] 		= $row->status;

			}
		}else{
			$isi['id'] 			= '';
			$isi['pin'] 		= '';
			$isi['nama_pes']	= '';
			$isi['email_pes'] 	= '';
			$isi['status'] 		= '';
			
		}
		
		$this->load->view('pengunjung/input_peserta', $isi);
	}
	

	

	public function delete()
	{
		
		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('peserta');
		if($query->num_rows()>0){
			$this->Pengunjung_Model->getdelete($key);
		}
		redirect ('Pengunjung');
	}


	public function save()
		{	

		$key = $this->input->post('id');
		$data['nama_pes'] 	= $this->input->post('nama_pes');
		$data['email_pes'] 	= $this->input->post('email_pes');
		$data['status'] 	= $this->input->post('status');
		$data['pin'] 		= $this->input->post('pin');


		
		$query = $this->Pengunjung_Model->getdata($key);
			if($query->num_rows()==0){
				
				$this->db->set('created_on', 'NOW()', false);
				$this->Pengunjung_Model->getinsert($data);
				$this->session->set_flashdata('info','data sudah tersimpan');
				
			}else{
				$this->Pengunjung_Model->getupdate($key,$data);
				$this->session->set_flashdata('info','data sukses di update');
			}

		redirect ('Pengunjung');
		}

}
