<?php

class Mahasiswa
{
  private $nim;
  protected $name;
  protected $class;

  public function __construct($nim, $name, $class)
  {
    $this->nim = $nim;
    $this->name = $name;
    $this->class = $class;
  }
  public function setNim($nim)
  {
    $this->nim = $nim;
  }

  public function getNim()
  {
    return $this->nim;
  }

  public function setJurusan($jurusan)
  {
    $this->class = $jurusan;
  }
  public function getJurusan()
  {
    return $this->class;
  }
}

$sisca = new Mahasiswa("2023123", "Sisca", "Teknik Informatika");
$nara = new Mahasiswa("21456321", "Nara", "Bisnis Digital");
echo "Sisca dengan nim {$sisca->getNim()} semester 1 berada di jurusan {$sisca->getJurusan()}" . "<br>";

echo "Nara dengan nim {$nara->getNim()} semester 2 berada di jurusan {$nara->getJurusan()}" . "<br>";
echo "====== <br>";
$sisca->setJurusan("Sistem Informasi");
$nara->setJurusan("Komunikasi");
echo "Sisca pada semester 2 pindah jurusan ke {$sisca->getJurusan()}" . "<br>";
echo "Nara pada semester 3 pindah jurusan ke {$nara->getJurusan()}" . "<br>";
