<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model
{
    //fungsi cek session
     function __construct(){
      parent::__construct();

          if($this->session->userdata('status') != "login"){
            //redirect(base_url().'login',refresh);
         //$this->load->view('tampilah_login');
            }
     }

     function index(){
      $this->load->view('dashboard');
     }
 }