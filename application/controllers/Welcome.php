<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('m_yayasan');
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
    $this->load->view('header');
    $this->load->view('profile');
    $this->load->view('footer');
  }

  public function kontak(){
    $this->load->view('header');
    $this->load->view('kontak');
    $this->load->view('footer');
  }
}
