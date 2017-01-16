<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('m_admin');
    // $this->model = $this->m_admin;
    // $this->load->database();

    $this->load->model('m_yayasan');
    $this->load->helper(array('url')); //load helper url
    if (!$this->session->userdata('logged_in')) {
        redirect('admin/masuk');
		}
  }

  public function index(){
    $data['record'] = $this->m_admin->getAdmin();
    $this->load->view('admin/header');
    $this->load->view('admin/home');
    $this->load->view('admin/contenthome',$data);
  }

  function logout() {
    $this->session->unset_userdata('logged_in');
    redirect('admin/welcome', 'refresh');
  }

  public function profileadmin(){
  $data['record'] = $this->m_yayasan->getProfile();
  $this->load->view('admin/header');
  $this->load->view('admin/home');
  $this->load->view('admin/profileadmin',$data);
}
}
