<?php
class Food {
  private string $name;
  private int $price;

  public function __construct(string $name, int $price) {
    $this->name = $name;
    $this->price = $price;
  }

  public function show_price() {
    echo $this->price . "<br>";
  }

}

class Animal {
  private string $name;
  private int $height;
  private int $weight;

  public function __construct(string $name, int $height, int $weight) {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }

  public function show_height() {
    echo $this->height . "<br>";
  }

}
$potato = new Food("potato", 250);


$dog = new Animal("dog", 60, 5000);


echo "<pre>";
print_r($potato);
print_r($dog);
echo "</pre>";


$potato->show_price();
$dog->show_height();
?>