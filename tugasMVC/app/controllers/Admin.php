<?php
class Admin extends Controller
{

  public function index()
  {
    $data["title"] = "Admin PPDB Siswa";
    $data["biodata"] = $this->model("Admin_model")->getAllData();
    $this->view("templates/sidebar", $data);
    $this->view("templates/header", $data);
    $this->view("admin/index", $data);
    $this->view("templates/footer");
  }
  public function detail($id)
  {
    $path = $_SERVER['REQUEST_URI'];
    $segments = explode('/', trim($path, '/'));
    $id = end($segments);
    $id_data = intval($id);

    $data["title"] = "Detail Data Siswa";
    $data["biodata"] = $this->model("Admin_model")->getSiswaById($id_data);
    $this->view("templates/sidebar", $data);
    $this->view("templates/header", $data);
    $this->view("admin/detail", $data);
    $this->view("templates/footer");
  }

  public function edit($id)
  {
    $path = $_SERVER['REQUEST_URI'];
    $segments = explode('/', trim($path, '/'));
    $id = end($segments);
    $id_data = intval($id);

    $data["title"] = "Edit Data Siswa";
    $data["biodata"] = $this->model("Admin_model")->getSiswaById($id_data);

    $this->view("templates/sidebar", $data);
    $this->view("templates/header", $data);
    $this->view("admin/edit", $data);
    $this->view("templates/footer");
  }

  public function editBiodata($id)
  {
    $path = $_SERVER['REQUEST_URI'];
    $segments = explode('/', trim($path, '/'));
    $id = end($segments);
    $id_data = intval($id);


    $data = [
      'id_biodata' => $id_data,
      'nama' => $_POST['nama'],
      'jenis_kelamin' => $_POST['jenis_kelamin'],
      'alamat' => $_POST['alamat'],
      'tanggal_lahir' => $_POST['tanggal_lahir'],
      'nama_ortu' => $_POST['nama_ortu'],
      'email_ortu' => $_POST['email_ortu'],
      'nomor_ortu' => $_POST['nomor_ortu'],
      'asal_sekolah' => $_POST['asal_sekolah'],
    ];

    if ($this->model("Admin_model")->editSiswa($data) > 0) {
      Flasher::setFlash("berhasil", "mengedit", "success");
    } else {
      Flasher::setFlash("gagal", "mengedit", "danger");
    }

    header("Location: " . BASE_URL . "/admin");
    exit;
  }
  public function delete($id)
  {
    $path = $_SERVER['REQUEST_URI'];
    $segments = explode('/', trim($path, '/'));
    $id = end($segments);
    $id_data = intval($id);

    if ($this->model("Admin_model")->deleteSiswa(["id" => $id_data]) > 0) {
      Flasher::setFlash("berhasil", "dihapus", "success");
      header("Location: " . BASE_URL . "/admin");
      exit;
    } else {
      Flasher::setFlash("gagal", "dihapus", "danger");
      header("Location: " . BASE_URL . "/admin");
      exit;
    }
  }
}
