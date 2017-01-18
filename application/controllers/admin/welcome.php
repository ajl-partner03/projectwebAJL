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

  public function addadmin(){
    $data['record'] = $this->m_admin->getAdmin();
    $this->load->view('admin/header');
    $this->load->view('admin/home');
    $this->load->view('admin/addadmin',$data);
  }

  // insert akun admin
  public function insert_admin(){
      if(isset($_POST['btnSubmit'])){
				// $gbr = $this->upload->data();
				$data = array(
        'id' =>$this->input->post('id'),
				'username' =>$this->input->post('username'),
				'password' =>$this->input->post('password')
				// 'profile' =>$gbr['file_name']
				);
				$this->m_admin->insert_admin($data); //akses model untuk menyimpan ke database
        redirect('admin/welcome'); //jika berhasil maka akan ditampilkan view gambar
      }else{
        redirect('admin/welcome/addadmin'); //jika gagal maka akan ditampilkan form upload
			}
	}

  public function articlepost(){
    $data['record'] = $this->m_yayasan->getArticle();
    $this->load->view('admin/header');
    $this->load->view('admin/home');
    $this->load->view('admin/articlepost',$data);
  }

  public function addarticle(){
    $data['record'] = $this->m_yayasan->getArticle();
    $this->load->view('admin/header');
    $this->load->view('admin/home');
    $this->load->view('admin/addarticle',$data);
  }

  public function insert_article(){
  	$this->load->library('upload');
  	$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
    $config['upload_path'] = './uploads/article/'; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['max_size'] = '200488'; //maksimum besar file 20M
    $config['file_name'] = $nmfile; //nama yang terupload nantinya
  	$this->upload->initialize($config);

    if($_FILES['article']['name'])
    // // if (isset($_POST['submit']))
    {
      if (!$this->upload->do_upload('article'))
      {
			     // $error = array('error' => $this->upload->display_errors());
           $this->load->view('admin/header');
           $this->load->view('admin/home');
           $this->load->view('admin/addarticle');
           // $this->load->view('admin/tambah_anak', $error);
			        //redirect('admin/welcome/tambahgambar'); //jika gagal maka akan ditampilkan form tambahgambar
            }else{
              $gbr = $this->upload->data();
              $data = array(
                'judul_artikel' =>$this->input->post('judul_artikel'),
                'isi_artikel' =>$this->input->post('isi_artikel'),
                'gambar_artikel' =>$gbr['file_name']
              );

      $this->m_yayasan->insert_article($data); //akses model untuk menyimpan ke database
      redirect('admin/welcome/articlepost'); //jika berhasil maka akan ditampilkan view gambar
        }
      }
    }
}
