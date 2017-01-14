<?php
class M_yayasan extends CI_Model {
  var $tabel1 = 'profile';// ini table gallery

  function __construct() {
    parent::__construct();
  }

  //artikel
    function getProfile() {
      return $this->db->get('profile');
    }

    function getSingleProfile($id){
      return $query = $this->db->get_where('profile', array('id' => $id));
    }

    function insert_profile($data){
      $this->db->insert($this->tabel1, $data);
      return TRUE;
    }

    //fungsi untuk melakukan edit data gambar
    function update_profile($data, $id){
      $this->db->where('id', $id);
      $this->db->update($this->tabel1, $data);
      return TRUE;
    }

    //fungsi untuk menghapus gambar dari database
    function do_hapus_profile($id) {
      $this->db->delete('profile', array('id' => $id));
      redirect('admin/welcome/profile');
    }
  }
?>
