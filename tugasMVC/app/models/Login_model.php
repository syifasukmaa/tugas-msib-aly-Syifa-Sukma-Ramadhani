<?php

class Login_model
{
  private $table = "admin";
  private $db;
  public function __construct()
  {
    $this->db = new Database;
    //data source name
  }

  public function validasiKey($username, $password)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username = :username');
    $this->db->bind('username', $username);
    $row = $this->db->resultSingle();

    if ($row && md5($password) == $row['password']) {
      return $row;
    } else {
      return false;
    }
  }
}
