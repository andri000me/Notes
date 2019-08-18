<?php
class daftar extends CI_Controller{

    // Memanggil view Daftar
    public function index(){
        $this->load->view('daftarpage');
    }

    // Menambahkan user baru
    public function daftar1(){
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $password = $_POST['password'];

        $this->db->set('email', $email);
        $this->db->set('nama', $nama);
        $this->db->set('pass', MD5("$password"));
        $this->db->insert('pengguna');
        redirect('login');
    }
}
?>