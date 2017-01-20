<?php
class M_admin extends CI_Model {
  var $tabel2 = 'user';// ini table gallery

  function __construct() {
    parent::__construct();
  }

    function getAdmin() {
      return $this->db->get('user');
    }

    function getSingleAdmin($id){
      return $query = $this->db->get_where('user', array('id' => $id));
    }

    function insert_admin($data){
      $this->db->insert($this->tabel2, $data);
      return TRUE;
    }

    function update_admin($data, $id){
      $this->db->where('id', $id);
      $this->db->update($this->tabel2, $data);
      return TRUE;
    }

    function do_hapus_admin($id) {
      $this->db->delete('user', array('id' => $id));
      redirect('admin/welcome');
    }
  }
