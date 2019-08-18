<?php
class Page extends CI_Controller{

  //Validasi jika user belum login
  function __construct(){
    parent::__construct();
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }

  // Jika user sudah login akan diarahkan ke Dashboard
  function index(){
    $this->load->view('v_dashboard');
  }
}
