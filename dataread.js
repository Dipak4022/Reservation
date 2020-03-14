var room;
function ShowRoomEight() {
 var database=firebase.database();
 var ref=database.ref('routine');
 ref.on('value',getData,errorData);
}
function getData(snapshot){
var days=document.getElementById("dates").value;
const day = new Date(days);
 var weekday = new Array(7);
 weekday[6] = "Sunday";
 weekday[0] = "Monday";
 weekday[1] = "Tuesday";
 weekday[2] = "Wednesday";
 weekday[3] = "Thursday";
 weekday[4] = "Friday";
 weekday[5] = "Saturday";
 var n = weekday[day.getDay()];
var scor=snapshot.val();
 var keys=Object.keys(scor);
 console.log(keys);
 for(var i=0;i<keys.length;i++){
   var k=keys[i];
   var nam=scor[k].day;
   if(nam==n){
 console.log(n);
     var namer=scor[k].day;
     var ag=scor[k].period;
if(ag==1){
       var room=scor[k].rooms;
}
  }
 }
}
document.write(room);
function errorData(snapshot){
console.log("Rrror!!");
}
