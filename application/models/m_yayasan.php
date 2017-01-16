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
  }
?>
