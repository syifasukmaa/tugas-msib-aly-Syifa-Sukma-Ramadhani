<?php
class Shoes
{
  public $brand;
  public $size;

  public function __construct($brand, $size)
  {
    $this->brand = $brand;
    $this->size = $size;
  }
}

// Kelas turunan untuk sendal sport
class SportShoes extends Shoes
{
  public $sportType;

  public function __construct($brand, $size, $sportType)
  {
    parent::__construct($brand, $size);
    $this->sportType = $sportType;
  }


  public function getSize()
  {
    return $this->size;
  }
  public function wear()
  {
    return "Wearing sport Shoes from $this->brand for $this->sportType";
  }
}

class FormalShoes extends Shoes
{
  public $material;

  public function __construct($brand, $size, $material)
  {
    parent::__construct($brand, $size);
    $this->material = $material;
  }


  public function getMaterial()
  {
    return $this->material;
  }
}

$shoes1 = new SportShoes('Adidas', 43, 'Run');
$shoes2 = new FormalShoes('Aerostreet', 43, 'Kulit Buk');
echo $shoes1->wear() . "<br>";
echo "Material sepatu formal: " . $shoes2->getMaterial();
