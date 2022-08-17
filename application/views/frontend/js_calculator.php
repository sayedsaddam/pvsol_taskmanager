<div class="container m-5">
   <div class="row justify-content-center">
      <div class="col-md-6 offset-md-3">
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
</script>