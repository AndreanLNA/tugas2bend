<!DOCTYPE html>
<html>
<body>

<?php
//class/object
class Fruit {

//access modifier
  public $name;
  public $color;

//constuktor
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }

//destruktor
  function __destruct() {
    echo "Mereka menyukai {$this->name}."; 
    echo "<br>";
    echo "<hr>";
  }
 
  public function intro() {
    echo "Mereka menyukai {$this->name} yang berwarna {$this->color}."; 
    echo "<br>";
    echo "<hr>";
  }
}

//inheritance
class Strawberry extends Fruit {
  public function message() {
    echo "Saya memiliki 3 jenis hewan peliharaan"; 
    echo "<br>";
    echo "<hr>";
  }
}

//static method
class greeting {
  public static function welcome() {
    echo "Mereka adalah kucing,anjing dan tikus";
    echo "<br>";
    echo "<hr>";
  }
}

//static properties
class harga {
  public static $value = 100000;
}

$apple = new Fruit("Susu","Putih");
$strawberry = new Strawberry("Susu", "Putih");
$strawberry->message();
$strawberry->intro();

greeting::welcome();

echo harga::$value;

//iretables
function getIterable():iterable {
  return [" adalah", " harga", " makanan"." mereka"];
}

$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
}

//interface
interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "<hr>";
    echo " Tom bersuara Meow ";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo ", Spike bersuara Bark ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo ", Jerry bersuara Squeak";
    echo "<br>";
    echo "<hr>";
  }
}

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

foreach($animals as $animal) {
  $animal->makeSound();
}
?>
 
</body>
</html>
