<?php
class Login extends CI_Controller
{

	// Memanggil Model Login
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	// Memanggil View Login
	function index()
	{
		$this->load->view('v_login');
	}

	// Fungsi Autentikasi User
	function auth()
	{
		$username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

		$cek_user = $this->login_model->auth_user($username, $password);

		if ($cek_user->num_rows() > 0) { //jika login sebagai user
			$data = $cek_user->row_array();
			$this->session->set_userdata('masuk', TRUE);
			$this->session->set_userdata('ses_email', $data['email']);
			$this->session->set_userdata('ses_nama', $data['nama']);
			$this->session->set_userdata('ses_id', $data['id']);
			redirect('page');
		} else {  // jika username dan password tidak ditemukan atau salah
			$url = base_url();
			echo $this->session->set_flashdata('msg', 'Username Atau Password Salah');
			redirect($url);
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		$url = base_url('');
		redirect($url);
	}
}
