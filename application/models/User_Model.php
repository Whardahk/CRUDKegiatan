<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_Model extends CI_model {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
	public function getdata($key)
	{
		$this->db->where('id',$key);
		$hasil = $this->db->get('tb_users');
		return $hasil;
	}
	 
	public function getupdate($key,$data)
	{
		$this->db->where('id',$key); 
		$hasil = $this->db->update('tb_users',$data);
		return $hasil;
	}
	
	public function getinsert($data)
	{
		$this->db->insert('tb_users',$data);
	}
		
	
	public function getdelete($key)
	{
		$this->db->where('id',$key);
		$this->db->delete('tb_users');
	}

	
}
