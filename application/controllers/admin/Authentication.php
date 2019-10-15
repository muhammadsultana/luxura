<?php

class Authentication extends MY_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Authentication_m');
    $this->module     = 'admin';
  }

  public function index()
  {
    $this->data['title']          = 'Login | Luxurious Ampera';
    $this->load->view('admin/pages/login', $this->data);
  }

  public function do_login()
  {
    $username     = $this->POST('username');
    $password     = $this->POST('password');

    $db = $this->Authentication_m->authenticate($username, $password);
    redirect('admin/Dashboard');
  }
}