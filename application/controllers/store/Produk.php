<?php

class Produk extends MY_Controller {
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
    $this->template($this->data, $this->module);
  }

  public function produk($id_produk)
  {
    $this->data['content']    = 'pages/produk';
    $this->data['title']      = 'Luxurious Ampera';
    $this->data['single']     = $this->produk_model->get_single_produk($id_produk)[0];
    $this->template($this->data, $this->module);
  }
}