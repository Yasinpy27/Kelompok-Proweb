<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

    // Memanggil Model Mahasiswa
    //$this->load->model('Mahasiswa_model');

  }


  function index()
  {

    $data['title'] = 'Ngapak Laptop';

    $this->load->view('partial/header', $data);
    $this->load->view('partial/navbar');
    $this->load->view('pages/index', $data);
    $this->load->view('partial/footer');
  }

  function about()
  {

    $data['title'] = 'Ngapak Laptop | About Us';

    $this->load->view('partial/header', $data);
    $this->load->view('partial/navbar');
    $this->load->view('pages/about', $data);
    $this->load->view('partial/footer');
  }

  function catalogue()
  {

    $data['title'] = 'Ngapak Laptop | Catalogue';

    $this->load->view('partial/header', $data);
    $this->load->view('partial/navbar');
    $this->load->view('pages/catalogue', $data);
    $this->load->view('partial/footer');
  }

  function partnership()
  {

    $data['title'] = 'Ngapak Laptop | Partnership';

    $this->load->view('partial/header', $data);
    $this->load->view('partial/navbar');
    $this->load->view('pages/partnership', $data);
    $this->load->view('partial/footer');
  }

  function my_account()
  {

    $data['title'] = 'Ngapak Laptop | Login';

    $this->load->view('partial/header', $data);
    $this->load->view('partial/navbar');
    $this->load->view('pages/login', $data);
    $this->load->view('partial/footer');
  }

  function register()
  {

    $data['title'] = 'Ngapak Laptop | Register';

    $this->load->view('partial/header', $data);
    $this->load->view('partial/navbar');
    $this->load->view('pages/register', $data);
    $this->load->view('partial/footer');
  }

  function contact()
  {

    $data['title'] = 'Ngapak Laptop | Contact';

    $this->load->view('partial/header', $data);
    $this->load->view('partial/navbar');
    $this->load->view('pages/contact', $data);
    $this->load->view('partial/footer');
  }

}