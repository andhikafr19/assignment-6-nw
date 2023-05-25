<?php
  class Fruit
  {
    // Properties
    public $name;
    public $color;

    // Methods
    public function setName($name)
    {
      $this->name = $name;
    }
    public function getName()
    {
      return $this->name;
    }
    public function setColor($color)
    {
      $this->color = $color;
    }
    public function getColor()
    {
      return $this->color;
    }
  }

  $apple = new Fruit();
  $apple->setName('Apple');
  $apple->setColor('Red');
  echo "Name: " . $apple->getName();
  echo "<br>";
  echo "Color: " .  $apple->getColor();