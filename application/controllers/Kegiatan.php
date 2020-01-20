<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KegiatanAdmin extends CI_Controller {
	

	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('KegiatanAdmin_Model'));

		// cek session sudah ada/ belum atau user sudah login/ belum, jika sudah maka akan diarahkan ke halaman dashboard
		//if($this->session->has_userdata('username')){redirect('user');}
    }


	public function index()
	{
		//if($this->session->has_userdata('username')){redirect('user');}

		$isi['id'] 					= '';
		$isi['program'] 			= '';
		$isi['kegiatan']			= '';
		$isi['target_kegiatan'] 	= '';
		$isi['anggaran'] 			= '';
		$isi['sub_kegiatan'] 		= '';
		$isi['target_volume_sub']	= '';
		$isi['lokasi_sub_kegiatan'] = '';
		$isi['realisasi_volume_sub']= '';
		$isi['anggaran_sub_kegiatan']= '';
		
		$isi['data']		= $this->db->get('tb_kegiatan');
		$this->load->view('kegiatanadmin/kegiatan',$isi);
	}


	public function input_kegiatan()
	{
		$isi['id'] 					= '';
		$isi['program'] 			= '';
		$isi['kegiatan']			= '';
		$isi['target_kegiatan'] 	= '';
		$isi['anggaran'] 			= '';
		$isi['sub_kegiatan'] 		= '';
		$isi['target_volume_sub']	= '';
		$isi['lokasi_sub_kegiatan'] = '';
		$isi['realisasi_volume_sub']= '';
		$isi['anggaran_sub_kegiatan']= '';

		$isi['data']		= $this->db->get('tb_kegiatan');
		$this->load->view('kegiatanadmin/input_kegiatan',$isi);
	}
 
 

	public function edit()
	{
		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$data = $this->db->get('tb_kegiatan');
		if($data->num_rows()>0){
			foreach($data->result() as $row){
				$isi['id'] 						= $row->id;
				$isi['program'] 				= $row->program;
				$isi['kegiatan'] 				= $row->kegiatan;
				$isi['target_kegiatan'] 		= $row->target_kegiatan;
				$isi['anggaran'] 				= $row->anggaran;
				$isi['sub_kegiatan'] 			= $row->sub_kegiatan;
				$isi['target_volume_sub'] 		= $row->target_volume_sub;
				$isi['lokasi_sub_kegiatan'] 	= $row->lokasi_sub_kegiatan;
				$isi['realisasi_volume_sub'] 	= $row->realisasi_volume_sub;
				$isi['anggaran_sub_kegiatan'] 	= $row->anggaran_sub_kegiatan;
			}
		}else{
			$isi['id'] 					= '';
			$isi['program'] 			= '';
			$isi['kegiatan']			= '';
			$isi['target_kegiatan'] 	= '';
			$isi['anggaran'] 			= '';
			$isi['sub_kegiatan'] 		= '';
			$isi['target_volume_sub']	= '';
			$isi['lokasi_sub_kegiatan'] = '';
			$isi['realisasi_volume_sub']= '';
			$isi['anggaran_sub_kegiatan']= '';
			
		}
		
		$this->load->view('kegiatanAdmin/input_kegiatan', $isi);
	}
	

	

	public function delete()
	{
		
		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('tb_kegiatan');
		if($query->num_rows()>0){
			$this->KegiatanAdmin_Model->getdelete($key);
		}
		redirect ('KegiatanAdmin');
	}


	public function save()
		{	

		$key = $this->input->post('id');
		$data['program'] 	= $this->input->post('program');
		$data['kegiatan'] 	= $this->input->post('kegiatan');
		$data['target_kegiatan'] 	= $this->input->post('target_kegiatan');
		$data['anggaran'] 		= $this->input->post('anggaran');
		$data['sub_kegiatan'] 	= $this->input->post('sub_kegiatan');
		$data['target_volume_sub'] 	= $this->input->post('target_volume_sub');
		$data['lokasi_sub_kegiatan'] 	= $this->input->post('lokasi_sub_kegiatan');
		$data['realisasi_volume_sub'] 		= $this->input->post('realisasi_volume_sub');
		$data['anggaran_sub_kegiatan'] 		= $this->input->post('anggaran_sub_kegiatan');


		
		$query = $this->KegiatanAdmin_Model->getdata($key);
			if($query->num_rows()==0){
				
				$this->db->set('created_on', 'NOW()', false);
				$this->KegiatanAdmin_Model->getinsert($data);
				$this->session->set_flashdata('info','data sudah tersimpan');
				
			}else{
				$this->KegiatanAdmin_Model->getupdate($key,$data);
				$this->session->set_flashdata('info','data sukses di update');
			}

		redirect ('KegiatanAdmin');
		}

}
