<?php

class Register_model
{
  private $table = "biodata";
  private $db;
  public function __construct()
  {
    $this->db = new Database;
    //data source name
  }

  public function registerSiswa($data)
  {
    $query = "INSERT INTO biodata VALUES('', :nama, :jenis_kelamin, :alamat, :tanggal_lahir, :nama_ortu, :email_ortu, :nomor_ortu, :asal_sekolah)";
    $this->db->query($query);
    $this->db->bind("nama", $data["nama"]);
    $this->db->bind("jenis_kelamin", $data["jenis_kelamin"]);
    $this->db->bind("alamat", $data["alamat"]);
    $this->db->bind("tanggal_lahir", $data["tanggal_lahir"]);
    $this->db->bind("nama_ortu", $data["nama_ortu"]);
    $this->db->bind("email_ortu", $data["email_ortu"]);
    $this->db->bind("nomor_ortu", $data["nomor_ortu"]);
    $this->db->bind("asal_sekolah", $data["asal_sekolah"]);

    $this->db->execute();
    return $this->db->rowCount();
  }
}
