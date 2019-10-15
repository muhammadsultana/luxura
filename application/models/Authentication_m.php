<?php

class Authentication_m extends MY_Model {
  public function __construct()
  {
    parent::__construct();
  }

  public function authenticate($username, $password)
  {
    $db = $this->db->get_where('user', ['username'    => $username])->result_array();

    if (count($db) > 0 ) {
      // $password = password_verify($password, $db[0]['password']);
      return ($password) ? $db : false;
    }
  }
}