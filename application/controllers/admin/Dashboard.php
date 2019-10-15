<?php

class Dashboard extends MY_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->module       = 'admin';
  }

  public function index()
  {
    $this->data['title']        = 'Dashboard';
    $this->data['content']      = 'pages/dashboard';
    $this->admin_template($this->data, $this->module);
  }

  public function create()
  {
    
  }
}