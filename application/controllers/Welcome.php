<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('M_yayasan');
  }

  public function index(){
    $this->load->view('header');
    $this->load->view('slider');
    $this->load->view('home');
    $this->load->view('footer');
  }

  public function tentang(){
    $this->load->view('header');
    $this->load->view('tentang');
    $this->load->view('footer');
  }

  public function profile(){
    $data['record'] = $this->M_yayasan->getProfile();
    $this->load->view('header');
    $this->load->view('profile',$data);
    $this->load->view('footer');
  }

  public function kontak(){
    $this->load->view('header');
    $this->load->view('kontak');
    $this->load->view('footer');
  }
}
