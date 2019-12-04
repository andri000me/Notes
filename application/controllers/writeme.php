<?php
class writeme extends CI_Controller
{
    public function simpan()
    {
        $id = $_POST['id'];
        $notes = $_POST['notes'];

        $this->db->set('id_user', $id);
        $this->db->set('catatan', $notes);
        $this->db->insert('notes');
        redirect('page/index');
    }
}
