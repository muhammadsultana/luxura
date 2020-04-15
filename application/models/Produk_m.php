<?php

class Produk_m extends MY_Model {
  public function __construct()
  {
    parent::__construct();
  }

  public function get_kaos()
  {
    return $this->db->join('category', 'category.id_category = produk.id_category')->get_where('produk', ['jenis_produk' => 'kaos'])->result();
  }

  public function insert($data)
  {
    return $this->db->insert('produk', $data);
  }

  public function get_single_produk($id_produk)
  {
    return $this->db->join('category', 'category.id_category = produk.id_category')->get_where('produk', ['id_produk' => $id_produk])->result();
  }
}