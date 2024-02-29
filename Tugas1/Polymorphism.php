<?php
class Keyboard
{
  protected $brand;
  protected $layout;

  public function __construct($brand, $layout)
  {
    $this->brand = $brand;
    $this->layout = $layout;
  }

  public function pressKey()
  {
    return "tidak berisik";
  }
  public function getLayout()
  {
    return $this->layout;
  }
  public function getBrand()
  {
    return $this->brand;
  }
}
class MechanicalKeyboard extends Keyboard
{
  private $switchType;

  public function __construct($brand, $layout, $switchType)
  {
    parent::__construct($brand, $layout);
    $this->switchType = $switchType;
  }

  public function pressKey()
  {
    if ($this->switchType === "Clacky") {
      return " berisik";
    } else if ($this->switchType === "Linear") {
      return "tidak berisik";
    } else if ($this->switchType === "Tectile") {
      return "agak berisik";
    }
  }

  public function getSwitchType()
  {
    return $this->switchType;
  }
}
class BareboneKeyboard extends Keyboard
{

  public function __construct($brand, $layout)
  {
    parent::__construct($brand, $layout);
  }

  public function pressKey()
  {
    return "ga terlalu berisik";
  }
}

$Boni = new MechanicalKeyboard("Ajazz", "75%", "Tectile");
$Sandi = new BareboneKeyboard("Logitech", "100%");
echo "Sandi mempunyai keyboard dari brand {$Sandi->getBrand()} dengan layout {$Sandi->getLayout()} <br>";
echo "Boni mempunyai keyboard dari brand {$Boni->getBrand()} dengan layout {$Boni->getLayout()} yang mempunyai suara {$Boni->pressKey()} karena menggunakan switch {$Boni->getSwitchType()}<br>";
