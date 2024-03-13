<?php
class Login extends Controller
{

  public function cekSudahLogin()
  {
    if (isset($_SESSION['is_login'])) {
      header('Location: ' . BASE_URL . '/admin');
      exit;
    }
  }

  public function index()
  {
    $this->cekSudahLogin();
    $this->view('admin/login');
  }

  public function tryLogin()
  {
    $this->cekSudahLogin();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $admin =  $this->model('Login_model')->validasiKey($username, $password);

      if ($admin) {
        $_SESSION['id_admin'] = $admin['id_admin'];
        $_SESSION['is_login'] = true;
        $_SESSION['flash'] = 'Login successful!';

        // Flasher::setFlash("berhasil", "Login", "success");
        header('Location: ' . BASE_URL . '/admin');
        exit;
      } else {
        header('Location: ' . BASE_URL . '/login?error=Invalid credentials');
        exit;
      }
    }
  }

  public function logout()
  {
    unset($_SESSION['id_admin']);
    unset($_SESSION['apakah_login']);
    session_destroy();

    header("Location: " . BASE_URL . "/login");
    exit;
  }
}
