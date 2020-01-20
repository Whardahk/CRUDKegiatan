<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_Model extends CI_model {
	
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
	public function getdata($key)
	{
		$this->db->where('id',$key);
		$hasil = $this->db->get('tb_kegiatan');
		return $hasil;
	}
	 
	public function getupdate($key,$data)
	{
		$this->db->where('id',$key); 
		$hasil = $this->db->update('tb_kegiatan',$data);
		return $hasil;
	}
	
	public function getinsert($data)
	{
		$this->db->insert('tb_kegiatan',$data);
	}
		
	
	public function getdelete($key)
	{
		$this->db->where('id',$key);
		$this->db->delete('tb_kegiatan');
	}

	
}
