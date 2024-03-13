<?php

class Admin_model
{
  private $table = "biodata";
  private $db;
  public function __construct()
  {
    $this->db = new Database;
    //data source name
  }

  public function getAllData()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->resultAll();
  }

  public function getSiswaById($id)
  {
    $this->db->query("SELECT * FROM " . $this->table . ' WHERE id_biodata=:id');
    $this->db->bind('id', $id);
    $result = $this->db->resultSingle();
    return $result;
  }

  public function editSiswa($data)
  {
    $query = "UPDATE biodata SET
    nama = :nama,
    jenis_kelamin = :jenis_kelamin,
    alamat = :alamat,
    tanggal_lahir = :tanggal_lahir,
    nama_ortu = :nama_ortu,
    email_ortu = :email_ortu,
    nomor_ortu = :nomor_ortu,
    asal_sekolah = :asal_sekolah
    WHERE id_biodata = :id_biodata";

    echo var_dump($data);


    $this->db->query($query);
    $this->db->bind("id_biodata", $data["id_biodata"]);
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

  public function deleteSiswa($data)
  {
    $query = "DELETE FROM biodata where id_biodata=:id";
    $this->db->query($query);
    $this->db->bind("id", $data["id"]);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
