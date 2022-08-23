<div class="container m-5" onload="displayTime()">
   <div class="row">
      <div class="col-md-6">
         <h1 class="font-weight-bold">Calculator in JS</h1>
         <table class="">
            <tr>
               <td colspan="3  "><input type="text" id="result" class="screen form-control rounded-0" placeholder="Result will be shown here..."></td>
               <td><input type="button" value="Clear" onclick="clearScreen()" class="clear btn btn-danger btn-md" /></td>
            </tr>
         </table>
         <table>
            <div class="keys">
               <!-- First row -->
               <input type="button" value="7" class="btn btn-primary btn-sm" onclick="display('7')">
               <input type="button" value="8" class="btn btn-primary btn-sm" onclick="display('8')">
               <input type="button" value="9" class="btn btn-primary btn-sm" onclick="display('9')">
               <input type="button" value="/" class="btn btn-warning btn-sm" onclick="display('/')"><br>
               <!-- Second row -->
               <input type="button" value="4" class="btn btn-primary btn-sm" onclick="display('4')">
               <input type="button" value="5" class="btn btn-primary btn-sm" onclick="display('5')">
               <input type="button" value="6" class="btn btn-primary btn-sm" onclick="display('6')">
               <input type="button" value="*" class="btn aqua-gradient btn-sm" onclick="display('*')"><br>
               <!-- Third row -->
               <input type="button" value="1" class="btn btn-primary btn-sm" onclick="display('1')">
               <input type="button" value="2" class="btn btn-primary btn-sm" onclick="display('2')">
               <input type="button" value="3" class="btn btn-primary btn-sm" onclick="display('3')">
               <input type="button" value="-" class="btn blue-gradient btn-sm" onclick="display('-')"><br>
               <!-- Fourth row -->
               <input type="button" value="0" class="btn btn-primary btn-sm" onclick="display('0')"> 
               <input type="button" value="." class="btn btn-primary btn-sm" onclick="display('.')">
               <input type="button" value="=" class="btn peach-gradient btn-sm equal-sign" onclick="solve()">
               <input type="button" value="+" class="btn purple-gradient btn-sm" onclick="display('+')">
            </div>
         </table>
      </div>
      <div class="col-md-6 text-right">
         <div id="time">
            <?php //define("MINSIZE", 50); echo MINSIZE.', '; echo constant("MINSIZE"); ?>
            <?php
               $url = "https://facebook.com/?search=saddam";
               $email = 'xyz@gmail.com';
               // echo $filteredEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
               echo filter_var($email, FILTER_VALIDATE_EMAIL) ? $email = 'valid email <br>' : $email = 'invalid email <br>';
               echo filter_var($url, FILTER_VALIDATE_URL) ? $url = 'valid url' : $url = 'invalid url';
               // array_chunk in php
               // array array_chunk($array, $size, $preserve_keys); // $preserve_keys -> Boolean value (True / False)
               $input_array = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h');
               echo '<pre>'; print_r(array_chunk($input_array, 3)); echo '</pre>';
               function change_case($in_array){
                  return (array_change_key_case($in_array, CASE_UPPER)); // default is lowercase
               }
               $array = array('Saddam' => 90, 'Dawood' => 85, 'Wahid' => 80);
               print_r(change_case($array));
            ?>
            <?php
               interface Animal{
                  public function makeSound();
               }
               class Cat implements Animal{
                  public function makeSound(){
                     echo 'Meow ';
                  }
               }
               class Dog implements Animal{
                  public function makeSound(){
                     echo 'Bark ';
                  }
               }
               class Mouse implements Animal{
                  public function makeSound() {
                     echo 'Squeak';
                  }
               }
               $cat = new Cat();
               $dog = new Dog();
               $mouse = new Mouse();
               $animals = array($cat, $dog, $mouse);
               foreach($animals as $animal){
                  $animal->makeSound();
               }
               // classes and objects
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
               $banana->set_name('Banana');
               $banana->set_color('Yellow');
               $apple->set_name('Apple');
               $apple->set_color('Red');
               echo '<br>';
               echo $apple->get_name().' is '.$apple->get_color().'<br>';
               echo $banana->get_name().' is '.$banana->get_color().'<br>';
               // $this keyword
               class Person{
                  public $name;
                  function set_name($name){
                     $this->name = $name;
                  }
               }
               $person = new Person();
               $person->set_name('Saddam ');
               echo $person->name;
               // outside the class (by changin the value of the property)
               class Age{
                  public $age;
               }
               $age = new Age();
               $age->age = 29;
               echo $age->age;
               // constructors in PHP
               class Car{
                  public $name;
                  public $color;
                  function __construct($name, $color){
                     $this->name = $name;
                     $this->color = $color;
                  }
                  function __destruct() {
                     echo "The car is {$this->name} and the color is {$this->color}";
                  }
                  function get_name(){
                     return $this->name;
                  }
                  function get_color(){
                     return $this->color;
                  }
               }
               $car = new Car('Toyota', 'Red');
               // $car = new Car('Toyota', 'Black');
               // echo '<br>'.$car->get_name().' is '.$car->get_color().'<br>';
               // Access modifiers in PHP
               class Mobile{
                  public $name;
                  protected $model;
                  private $serial;
                  public function set_name($n){ // public function
                     $this->name = $n;
                  }
                  function get_name(){
                     return $this->name;
                  }
                  protected function set_model($n){ // protected function
                     $this->model = $n;
                  }
                  private function set_serial($n){ // private function
                     $this->serial = $n;
                  }
               }
               $phone = new Mobile();
               $phone->set_name('Samsung');
               echo '<br>'.$phone->get_name();
               // $phone->set_model('S22 Ultra');
               // $phone->set_serial('123242342');
            ?>
         </div>
      </div>
   </div>
</div>
<?php
   // array column in php
   // array array_column($array, $column_key, $index_key = null);
   echo "Array column in PHP<br>";
   function column($details){
      $rec = array_column($details, 'hobby');
      return $rec;
   }
   $array = array(
      array('name' => 'Saddam', 'roll' => 1, 'hobby' => 'Coding'),
      array('name' => 'Ihsan', 'roll' => 2, 'hobby' => 'Cicket'),
      array('name' => 'Dawood', 'roll' => 3, 'hobby' => 'Football'),
      array('name' => 'Wahid', 'roll' => 4, 'hobby' => 'Tennis'),
   );
   echo '<pre>'; print_r(column($array)); echo '</pre>';
   // array_combine in php
   // array array_combine($keys, $values);
   echo "Array combine in PHP<br>";
   function combine($keys, $values){
      return (array_combine($keys, $values));
   }
   $array1 = array('Saddam', 'Ihsan', 'Dawood', 'Wahid');
   $array2 = array('29', '25', '27', '26');
   echo '<pre>'; print_r(combine($array1, $array2)); echo '</pre>';
   // array_count_values in php
   // array array_count_values($array);
   echo "Array count values in PHP<br>";
   function count_values($array){
      return (array_count_values($array));
   }
   $array = array('Saddam', 'Ihsan', 'Ihsan', 'Dawood', 'Wahid', 'Saddam', 'Ihsan', 'Dawood', 'Wahid');
   echo '<pre>'; print_r(count_values($array)); echo '</pre>';
   // array diff in php
   // array_diff($array1, $array2, $array3, .... $arrayn)
   echo "Array difference in PHP<br>";
   function difference($array1, $array2, $array3){
      return (array_diff($array1, $array2, $array3));
   }
   $array1 = array('a', 'b', 'c', 'd', 'e', 'f');
   $array2 = array('a', 'b', 'g', 'h');
   $array3 = array('a', 'f', 'i');
   echo '<pre>'; print_r(difference($array1, $array2, $array3)); echo '</pre>';
   
   // array_diff_assoc() in php
   echo 'array_diff_assoc() in PHP<br>'; 
   $arr1 = array('10' => 'Saddam', '12' => 'Dawood', '11' => 'Wahid', '20' => 'Aizaz', '18' => 'Ihsan');
   $arr2 = array('21' => 'Awais', '22' => 'Shakir', '23' => 'Umer');
   $arr3 = array('31' => 'Fahad', '32' => 'Wahab', '33' => 'Afzaal');
   echo '<pre>'; print_r(array_diff_assoc($arr1, $arr2, $arr3)); echo '</pre>';

   // array_diff_key() in php
   echo 'array_diff_key() in PHP<br>';
   $ar1 = array('10' => 'Saddam', '20' => 'Dawood', '30' => 'Wahid', '40' => 'Ihsan', '50' => 'Wahab');
   $ar2 = array('10' => 'Afzaal', '70' => 'Parizad', '30' => 'Ali', '80' => 'Haadi');
   $ar3 = array('30' => 'Abdul', '80' => 'Khan');
   echo '<pre>'; print_r(array_diff_key($ar1, $ar2, $ar3)); echo '</pre>';

   // array_diff_uassoc() in php, example 1
   echo 'array_diff_uassoc() in PHP, example 1<br>';
   function user_function($a, $b){
      if($a === $b){
         return 1;
      }
      return ($a > $b) ? 1 : 0;
   }
   $a1 = array('10' => 'Saddam', '20' => 'Aziz', '30' => 'Ijaz');
   $a2 = array('20' => 'Saddam', '10' => 'Aziz', '30' => 'Ijaz');
   echo '<pre>'; print_r(array_diff_uassoc($a1, $a2, 'user_function')); echo '</pre>';

   // array_diff_uassoc() in php, example 2
   echo 'array_diff_uassoc() in PHP, example 2<br>';
   function user_function2($a, $b){
      if($a === $b){
         return 0;
      }
      return ($a > $b) ? 1 : -1;
   }
   $a1 = array(array("a" => "green", "b" => "yellow", "c" => "white", "black"), "b" => "brown", "c" => "blue", "red");
   $a2 = array(array("a" => "green", "b" => "yellow", "white", "d" => "black"), "yellow", "red");
   $result = array_diff_uassoc($a1[0], $a2[0], 'user_function2');
   echo '<pre>'; print_r($result); echo '</pre>';
?>
<script>
   function display(val){
      document.getElementById('result').value += val;
      return val;
   }
   function solve(){
      let x = document.getElementById('result').value;
      let y = eval(x);
      document.getElementById('result').value = y;
      return y;
   }
   function clearScreen(){
      document.getElementById('result').value = "";
   }

   // json.parse
   // let userInfo = '{"name":"Saddam", "country":"Pakistan", "age": 25}';
   // let userInfoObj = JSON.parse(userInfo);
   // let userInfoStr = JSON.stringify(userInfoObj);
   // console.log(userInfoObj);
   // console.log(userInfoStr);

   //setInterval(() => console.log("Hi"), 1000); // Will display Hi every 1 second.
   // const displayTime = () => {
   //    let date = new Date();
   //    let time = date.toLocaleTimeString();
   //    console.log(time);
   // };
   // let ineterval = setInterval(displayTime, 3000);
   // document.getElementById('time').innerHTML = interval;

   // const add = (a, b) => {
   //    console.log(a + b);
   // }
   // setInterval(add, 3000, 5, 10);
   let count = 0;
   let id = setInterval(function(){
      console.log(count);
      count = count + 1;
      if(count > 10){
         clearInterval(id);
      }
   }, 1000);
</script>