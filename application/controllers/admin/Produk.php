<?php

class Produk extends MY_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Produk_m', 'produk_model');
    $this->module       = 'admin';
  }

  public function index()
  {
    $this->data['title']        = 'Produk';
    $this->data['content']      = 'pages/produk/produk';
    $this->data['kaos']         = $this->produk_model->get_kaos();
    $this->admin_template($this->data, $this->module);
  }

  public function form()
  {
    $this->data['content']       = 'pages/produk/form';
    $this->data['title']         = 'Tambah produk';
    $this->admin_template($this->data, $this->module);
  }

  public function create()
  {
    $nama_produk  = $this->POST('nama_produk');
    $harga        = $this->POST('harga_produk');
    $jenis        = $this->POST('jenis_produk');
    $gambar       = $_FILES['gambar']['name'];

    $data = [
      'nama_produk'   => $nama_produk,
      'jenis_produk'  => $jenis,
      'harga_produk'  => $harga,
      'gambar'        => $gambar
    ];

    $this->db->trans_start();
    $this->produk_model->insert($data);
    $this->db->trans_complete();

    if ($this->db->trans_status() === FALSE) {
      $this->flashmsg('Data gagal dibuat', 'danger');
      redirect('admin/Produk');
    } else {
      if ($_FILES['gambar']) {
        $id_image = str_replace(" ", "_", $nama_produk);
        // $this->dump($this->upload($id_image, 'assets/images/', $nama_produk)); exit;
      } else {
        $this->flashmsg('Masukkan gambar terlebih dahulu');
        redirect('refresh');
      }

      $this->flashmsg('Data berhasil dibuat');
      redirect('admin/Produk');
    }
  }
}