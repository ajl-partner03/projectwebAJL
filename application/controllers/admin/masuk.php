<?php

class Masuk extends CI_Controller {
    /* Konstructor : wajib ada !!  */

    function __construct() {
        parent::__construct();
        $this->load->model('login');
    }
    //fungsi yang pertama kali dipanggil (default)
    function index() {
        if ($this->session->userdata('logged_in')) {
            redirect('admin/welcome', 'refresh');
        } else {
            $this->load->helper(array('form'));
            $this->load->view('admin/login');
        }
    }
    //fungsi untuk pengecekan data
    function cek_login() {
        if ($this->input->post('username', true) == "" && $this->input->post('password', true) == "") {
            redirect('admin/welcome', 'refresh');
        }
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $this->login->cek_login($username, $password);
    }

}
