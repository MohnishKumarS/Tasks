<?php

// class Fruit {
//     protected $name;
//     public $color;
//     const match = "india is my country";

//     public function __construct($name, $color) {
//       $this->name = $name;
//       $this->color = $color;
//     }
//     public function intro() {
//       echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
//   }
  
//   // Strawberry is inherited from Fruit
//   class Strawberry extends Fruit {
//     public function message() {
//       return  $this->name;
//     }
//   }
//   $strawberry = new Strawberry("Strawberry", "red");
//  echo $strawberry->message();
//   $strawberry->intro();
// echo "<br>";

// echo Fruit::match;




class domain{
    public static function website(){
        echo "google.com";
    }
}

class host extends domain{
    public function hosting(){
        return domain::website() . " is live now";
    }
}

$on =  new host();
echo $on->hosting();



?>