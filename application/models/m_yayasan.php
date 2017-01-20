<?php
class M_yayasan extends CI_Model {
  var $tabel1 = 'article';// ini table gallery

  function __construct() {
    parent::__construct();
  }

  //artikel
  function getArticle() {
    return $this->db->get('article');
  }

  function getSingleArticle($id){
    return $query = $this->db->get_where('article', array('id' => $id));
  }

  function insert_article($data){
      $this->db->insert($this->tabel1, $data);
      return TRUE;
  }

  //fungsi untuk melakukan edit
  function update_article($data, $id){
      $this->db->where('id', $id);
      $this->db->update($this->tabel1, $data);
      return TRUE;
  }

  function do_hapus_article($id) {
      $this->db->delete('article', array('id' => $id));
      redirect('admin/welcome/articlepost');
    }
}
?>
