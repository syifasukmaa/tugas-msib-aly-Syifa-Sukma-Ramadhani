<?php

// parent
class Person
{
  protected $nama;
  private $kampus;

  public function __construct($nama)
  {
    $this->nama = $nama;
  }

  public function getNama()
  {
    return $this->nama;
  }

  public function getKampus()
  {
    return $this->kampus;
  }

  public function accessWebsite()
  {
    return "tidak dapat mengakses website";
  }
}

// child of persen
class Dosen extends Person
{
  private $nidn;
  private $mataKuliah;

  public function __construct($nama, $nidn, $mataKuliah)
  {
    parent::__construct($nama);
    $this->nidn = $nidn;
    $this->mataKuliah = $mataKuliah;
  }

  public function getNidn()
  {
    return $this->nidn;
  }

  public function setMataKuliah($mataKuliah)
  {
    $this->mataKuliah = $mataKuliah;
  }

  public function getMataKuliah()
  {
    return $this->mataKuliah;
  }

  public function accessWebsite()
  {
    return "dapat melihat dan mengedit banyak data mahasiwa di website";
  }
}

// child of person
class Mahasiswa extends Person
{
  private $nim;
  public function __construct($nama, $nim)
  {
    parent::__construct($nama);
    $this->nim = $nim;
  }

  public function getNim()
  {
    return $this->nim;
  }

  //method kosultasi mahasiswa
  public function konsultasiKRS(Dosen $dosen)
  {
    return "Mahasiswa {$this->getNama()} melakukan konsultasi KRS dengan Dosen {$dosen->getNama()}";
  }

  public function accessWebsite()
  {
    return "hanya dapat mengakses website diri sendiri";
  }
}

$dosenWali = new Dosen("Fajril Hidayat S.Kom", "123456", "Pemrograman Web");
$mahasiswa = new Mahasiswa("Nina Zadina", "2021001");
echo $mahasiswa->konsultasiKRS($dosenWali) . " untuk mata kuliah " . $dosenWali->getMataKuliah()  . "<br>";
echo "Pak " . $dosenWali->getNama() . " " . $dosenWali->accessWebsite() . " sedangkan mahasiswa " . $mahasiswa->accessWebsite() . "<br>";

//setter getter encapsulation 
$dosenWali->setMataKuliah("Basis Data");
echo "Penerapan setter untuk mata kuliah: " . $dosenWali->getMataKuliah();
