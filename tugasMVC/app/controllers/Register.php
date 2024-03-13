<?php
class Register extends Controller
{

  public function index()
  {
    $data["title"] = "Register PPDB Siswa";
    $this->view("_partials/header", $data);
    $this->view("register/index");
    $this->view("_partials/footer");
  }
  public function addBiodata()
  {
    if ($this->model("Register_model")->registerSiswa($_POST) > 0) {
      Flasher::setFlash("berhasil", "ditambahkan", "success");
      header("Location: " . BASE_URL . "/register");
      exit;
    } else {
      Flasher::setFlash("gagal", "ditambahkan", "danger");
      header("Location: " . BASE_URL . "/register");
      exit;
    }
  }
}
