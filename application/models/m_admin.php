<?php
class M_admin extends CI_Model {
  var $tabel2 = 'user';// ini table gallery

  function __construct() {
    parent::__construct();
  }

  //artikel
    function getAdmin() {
      return $this->db->get('user');
    }

    function getSingleAdmin($id){
      return $query = $this->db->get_where('user', array('id' => $id));
    }
  }
