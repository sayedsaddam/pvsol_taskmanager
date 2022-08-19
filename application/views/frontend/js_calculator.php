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
            ?>
         </div>
      </div>
   </div>
</div>

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