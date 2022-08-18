function update_task_status(obj, id){
   var status = obj.value;
   var url = base_url + 'admin/update_task_status';
   var message = 'Task status updated successfully ' + status;
   // var url = 
   $.ajax({
     url: url,
     type: 'post',
     data: {id: id, status: status},
     success: function(data){
       if(data){
         document.getElementsByClassName('message').innerHTML = message;
         setTimeout(function(){
           window.location.reload();
         }, 1000);
       }else{
         alert('Something went wrong!');
       }
     }
   });
}
// clock
function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('clock').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}