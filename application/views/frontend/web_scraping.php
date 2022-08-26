<?php 
namespace Html;
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, 'https://www.ahgroup-pk.com/');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $output = curl_exec($ch);
// curl_close($ch);

// preg_match_all('!//www.ahgroup-pk.com/assets/images/([^"]+)!', $output, $matches);

// print_r($matches);

// PHP - Abstract classes
// abstract class ParentClass{
//    abstract public function someMehtod1();
//    abstract public function someMehtod2($name, $color);
//    abstract public function someMethod3() : string;
// }

//abstract class example 1.
abstract class ParentClass{
   // Abstract method with an argument
   abstract protected function prefixName($name);
}
class ChildClass extends ParentClass{
   // public function prefixName($name)
   public function prefixName($name, $separator = '.', $greet = 'Dear'){
      if($name == 'John Doe'){
         $prefix = 'Mr.';
      }elseif($name == 'Jane Doe'){
         $prefix = 'Mrs.';
      }else{
         $prefix = '';
      }
      // return "{$prefix} {$name";
      return "{$greet} {$prefix}{$separator} {$name}";
   }
}
$class = new ChildClass;
echo $class->prefixName('John Doe').'<br>';
echo $class->prefixName('Jane Doe').'<br>';

// abstract class example 2.
abstract class Car{
   public $name;
   public function __construct($name){
      $this->name = $name;
   }
   abstract public function intro() : string;
}
// Child classes
class Audi extends Car{
   public function intro() : string{
      return "Choose German quality! I'm an $this->name!";
   }
}
class Volvo extends Car{
   public function intro() : string{
      return "Proud to be Swedish! I'm a $this->name!";
   }
}
class Citroen extends Car{
   public function intro() : string{
      return "French extravagance! I'm a $this->name!";
   }
}

// Create objects from the child classes
$audi = new audi('Audi');
echo $audi->intro().'<br>';

$volvo = new volvo('Volvo');
echo $volvo->intro().'<br>';

$citroen = new citroen('Citroen');
echo $citroen->intro();

// Traits in PHP
trait message1{
   public function msg1(){
      echo '<br>OOP is fun! ';
   }
}
trait message2{
   public function msg2(){
      echo 'OOP reduces code duplication!';
   }
}
class Greet{
   use message1;
}
class Greet2{
   use message1, message2;
}
$obj = new Greet();
$obj->msg1();

$obj2 = new Greet2();
$obj2->msg1();
$obj2->msg2();

echo '<br>';
// static methods in PHP OOP
class greeting{
   public static function welcome(){
      echo "Hello, World! &raquo; It's a static method call.";
   }
   public function __construct(){
      self::welcome();
   }
}
// Calling the static method
// greeting::welcome();
new greeting();
echo '<br>';
class domain{
   protected static function getWebsiteName(){
      return "w3schools.com";
   }
}

class domainW3 extends domain{
   public $websiteName;
   public function __construct(){
      $this->websiteName = parent::getWebsiteName();
   }
}
$domainW3 = new domainW3;
echo $domainW3->websiteName;

// namespaces in PHP OOP
class Table{
   public $title = '';
   public $numRows = 0;
   public function text(){
      echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
   }
}
$table = new Table();
$table->title = "My Table";
$table->numRows = 5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Interview</title>
</head>
<body>
   <?php $table->text(); ?>
</body>
</html>

<?php
// PHP pattern program
echo 'Pattern 1.<br>';
for($i = 1; $i <= 5; $i++){
   for($j = 1; $j <= $i; $j++){
      echo " $i ";
   }
   echo '<br>';
}
echo '<br> Pattern 2.<br>';
for($a = 5; $a >= 1; $a--){
   for($b = 1; $b <= $a; $b++){
      echo " $b ";
   }
   echo "<br>";
}
echo 'Pattern 3. <br>';
$n = 5;
for($c = 1; $c <= $n; $c++){
   for($d = 1; $d <= (2*$n) - 1; $d++){
      if($d >= $n-($c - 1) && $d <= $n+($c - 1)){
         echo " * ";
      }else{
         echo "&nbsp;&nbsp;";
      }      
   }
   echo '<br>';
}
echo '<br> <strong>Classes in PHP.</strong> <br>';
// classes in PHP
class Fruit{
   // properties
   public $name;
   public $color;
   // methods
   function set_name($name){
      $this->name = $name;
   }
   function get_name(){
      return $this->name;
   }
   function set_color($color){
      $this->color = $color;
   }
   function get_color(){
      return $this->color;
   }
}
$apple = new Fruit();

$banana = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
$banana->set_color('Yellow');
$banana->set_name('Banana');
echo $apple->get_name().' and it\'s color is ' .$apple->get_color(). '<br>';
echo $banana->get_name().' and it\'s color is '.$banana->get_color();