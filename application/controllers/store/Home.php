<?php

class Home extends MY_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Produk_m', 'produk_model');
    $this->module     = 'store';
  }

  public function index()
  {
    $this->data['content']    = 'pages/home';
    $this->data['title']      = 'Luxurious Ampera';
    $this->data['produk']     = $this->produk_model->get_kaos();
    
    $this->template($this->data, $this->module);
  }
}