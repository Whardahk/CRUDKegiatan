<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	

	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('User_Model'));

		// cek session sudah ada/ belum atau user sudah login/ belum, jika sudah maka akan diarahkan ke halaman dashboard
		//if($this->session->has_userdata('username')){redirect('user');}
    }


	public function index()
	{
		//if($this->session->has_userdata('username')){redirect('user');}

		$isi['username'] 	= '';
		$isi['password'] 	= '';
		
		$isi['data']		= $this->db->get('tb_users');
		$this->load->view('user/user',$isi);
	}


	public function input_user()
	{
		$isi['id'] 			= '';
		$isi['username'] 	= '';
		$isi['password'] 	= '';

		$isi['data']		= $this->db->get('tb_users');
		$this->load->view('user/input_user',$isi);
	}
 
 

	public function edit()
	{
		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$data = $this->db->get('tb_users');
		if($data->num_rows()>0){
			foreach($data->result() as $row){
				$isi['id'] 			= $row->id;
				$isi['username'] 	= $row->username;
				$isi['password'] 	= $row->password;
			}
		}else{
			$isi['id'] 			= '';
			$isi['username'] 	= '';
			$isi['password'] 	= '';
			
		}
		
		$this->load->view('user/edit_user', $isi);
	}
	

	

	public function delete()
	{
		
		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('tb_users');
		if($query->num_rows()>0){
			$this->User_Model->getdelete($key);
		}
		redirect ('user');
	}


	public function save()
		{	

		$key = $this->input->post('id');
		$data['username'] 	= $this->input->post('username');
		$data['password'] 	= MD5($this->input->post('password', TRUE));
		$data['level'] 		= $this->input->post('level');

		
		$query = $this->User_Model->getdata($key);
			if($query->num_rows()==0){
				
				$this->db->set('created_on', 'NOW()', false);
				$this->User_Model->getinsert($data);
				$this->session->set_flashdata('info','data sudah tersimpan');
				
			}else{
				$this->User_Model->getupdate($key,$data);
				$this->session->set_flashdata('info','data sukses di update');
			}

		redirect ('user');
		}

	public function saveedit()
		{	

		$key = $this->input->post('id');
		$data['username'] 	= $this->input->post('username');
		$data['password'] 	= MD5($this->input->post('password', TRUE));

		
		$query = $this->User_Model->getdata($key);
			if($query->num_rows()==0){
				
				$this->db->set('created_on', 'NOW()', false);
				$this->User_Model->getinsert($data);
				$this->session->set_flashdata('info','data sudah tersimpan');
				
			}else{
				$this->User_Model->getupdate($key,$data);
				$this->session->set_flashdata('info','data sukses di update');
			}

		redirect ('user');
		}

}
