<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
   https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-analytics.js"></script>

<script>
// Your web app's Firebase configuration
var firebaseConfig = {
  apiKey: "AIzaSyDjOxV95WFXnAcGfH4F52h7s3PTFteeAb0",
  authDomain: "class-reservation-system.firebaseapp.com",
  databaseURL: "https://class-reservation-system.firebaseio.com",
  projectId: "class-reservation-system",
  storageBucket: "class-reservation-system.appspot.com",
  messagingSenderId: "52101651578",
  appId: "1:52101651578:web:df8c0db5da92febb11efc3",
  measurementId: "G-LLKTZCF4TW"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();
</script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <body>
    <style media="screen">
      body{
        background: linear-gradient(45deg,#111,#09afff);
      }
    </style>
    <script type="text/javascript">
      function dateShow(){
        var choice =document.getElementById("show");
        show.style.display="none";
        if(show.style.display=="none"){
          show.style.display="block";
        }else{
          show.style.display="none";
        }
        ShowReservation();
      }
      function ShowReservation(){
        var choice =document.getElementById("hideReservation");
        hideReservation.style.display="block";
        if(hideReservation.style.display=="none"){
          hideReservation.style.display="block";
        }else{
          hideReservation.style.display="none";
        }
      }
      function AvaiableShow(){
        var choice =document.getElementById("hideavailable");
        hideavailable.style.display="none";
        if(hideavailable.style.display=="none"){
          hideavailable.style.display="block";
        }else{
          hideavailable.style.display="none";
        }
        AvaiableShow1();
      }
      function AvaiableShow1(){
        var choice =document.getElementById("hideavailable1");
        hideavailable1.style.display="none";
        if(hideavailable1.style.display=="none"){
          hideavailable1.style.display="block";
        }else{
          hideavailable1.style.display="none";
        }
      }
      function MyReservationShow(){
        var choice =document.getElementById("MyReservationHide");
        MyReservationHide.style.display="none";
        //MyReservationHide1.style.display="none";
        //MyReservationHide2.style.display="none";
        if(MyReservationHide.style.display=="none"){
          MyReservationHide.style.display="block";
          //MyReservationHide1.style.display="block";
        //  MyReservationHide2.style.display="block";
        }else{
          MyReservationHide.style.display="none";
          //MyReservationHide1.style.display="none";
          //MyReservationHide2.style.display="none";
        }

      }
      function MyReservationShow1(){
        var choice =document.getElementById("MyReservationHide1");
        MyReservationHide1.style.display="none";
        if(MyReservationHide1.style.display=="none"){
          MyReservationHide1.style.display="block";
        }else{
          MyReservationHide1.style.display="none";
        }

      }
      function MyReservationShow2(){
        var choice =document.getElementById("MyReservationHide2");
        MyReservationHide2.style.display="none";
        if(MyReservationHide2.style.display=="none"){
          MyReservationHide2.style.display="block";
        }else{
          MyReservationHide2.style.display="none";
        }
      }

    </script>

      <img style="margin-left:40px;height:100px;width:100px;border-radius:50%;"id="mypic"src="" alt="">

      <div class="">
         <p style="margin-top:0px;font-size:25px;;  text-align: left;color:#ffffff;font-weight:bold;margin-left:1150px;" id="EmaillName"></p>
      </div>
      <div class="">
      <p style="font-size:22px;text-align: left;color:#ffffff;font-weight: bold;margin-left:1060px;"id="Emaill"></p>
      </div>


    <label style="margin-left:300px;color:#fff" for="">Select Date :</label>
    <input style="width: 600px;height: 35px; margin-top:0px;" class="inputclass" style="" class="form-control" type="date" id="dates" value="">

    <button id="sho" style="height:35px;margin-left:20px;"class="btn btn-success" type="submit" name="button"onclick="dateShow()" >Available room</button>



    <script type="text/javascript">
     var Emailss=localStorage.getItem("Email");
     var EmailNamess=localStorage.getItem("EmailName");
     var EmailImagess =localStorage.getItem("EmaiImage");


     var v =document.getElementById("mypic");
     v.setAttribute("src",EmailImagess);
     document.body.appendChild(v);
     document.getElementById("Emaill").innerHTML=Emailss;
     document.getElementById("EmaillName").innerHTML=EmailNamess;

    </script>


    <style media="screen">
    #show{
      display: none;
    }

    #hideavailable{
      display: none;
    }
    #hideavailable1{
      display: none;
    }
    #MyReservationHide{
      display: none;
    }
    #MyReservationHide1{
      display: none;
    }
    #MyReservationHide2{
      display: none;
    }


      .bad{

        margin-top: 10px;
        min-height: 100vh;
        font-family: 'Poppins',sans-serif;
        background: linear-gradient(45deg,#111,#09afff);

      }
      .container{
        max-width: 600px;
        display: grid;
        grid-template-columns:repeat(auto-fit,minmax(100px,1fr));
        grid-gap:1px;
        margin: 0 auto;
      }
      .container .card{
        position: relative;
        width: 150px;
        height: 200px;
        margin: 0 auto;
        background: #fff;
        box-shadow: 0 15px 60px rgba(0,0,0,.5);
      }
      .container .card .face{
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .container .card .face.face1{
        box-sizing: border-box;
        padding: 20px;

      }

      .container .card .face .face1 .h2{
        margin: 0;
        padding: 0;

      }
      .container .card .face.face2 {
        background: #111;
        transition: 0.5s;

      }
      .container .card:nth-child(1) .face.face2{
        background: linear-gradient(45deg,#3503ad,#f7308c);

      }
      .container .card:nth-child(2) .face.face2{
        background: linear-gradient(45deg,#ccff00,#09afff);

      }
      .container .card:nth-child(3) .face.face2{
        background: linear-gradient(45deg,#e91e63,#ffeb3b);

      }
      .container .card:hover .face.face2{
        height: 60px;
      }
        .container .card .face.face2::before{
          content: '';
          position: absolute;
          top: 0;
          left: 0;
          width: 50%;
          height: 100%;
          background: rgba(255,255,255,.1);
        }
      .container .card .face.face2 h2{
        margin: 0;
        padding: 0;
        font-size: 3em;
        color: #fff;
        transition: 0.5s;
      }
        .container .card:hover .face.face2 h2{
          font-size: .5em;

        }

    </style>
    <script type="text/javascript">
    var choice =document.getElementById("show");
    var choice =document.getElementById("hideavailable1");
    var choice =document.getElementById("hideavailable");


    </script>



    <div id="show" class="bad">
    <div class="container">
      <div class="card">
        <div class="face face1">
          <div class="content">
            <h2 style="font-size:16px;">Booking Room</h2>
             <p>
                <button class="bg bg-primary" type="button"onclick="ShowRoomEight()">Sohw Room</button>
             </p>
          </div>

        </div>
        <div class="face face2">
          <h2>8:30 10:00 AM</h2>

        </div>

      </div>
      <div class="card">
        <div class="face face1">
          <div class="content">
            <h2 style="font-size:16px;">Booking Room</h2>
             <p>
               <button class="bg bg-primary" type="button" onclick="ShowRoomTen()">Sohw Room</button>
             </p>
          </div>

        </div>
        <div class="face face2">
          <h2>10:00 11:30 AM</h2>

        </div>

      </div>
      <div class="card">
        <div class="face face1">
          <div class="content">
            <h2 style="font-size:16px;">Booking Room</h2>
             <p>
               <button class="bg bg-primary" type="button" onclick="ShowRoomEleven()">Sohw Room</button>
             </p>
          </div>

        </div>
        <div class="face face2">
          <h2>11:30 1:00 AM</h2>

        </div>

      </div>

      </div>
    </br>

      <div class="container">
        <div class="card">
          <div class="face face1">
            <div class="content">
              <h2 style="font-size:16px;">Booking Room</h2>
               <p>
                 <button class="bg bg-primary" type="button" onclick="ShowRoomOne()">Sohw Room</button>
               </p>
            </div>

          </div>
          <div class="face face2">
            <h2>1:00 2:30 AM</h2>

          </div>

        </div>
        <div class="card">
          <div class="face face1">
            <div class="content">
              <h2 style="font-size:16px;">Booking Room</h2>
               <p>
                 <button class="bg bg-primary" type="button" onclick="ShowRoomTwo()">Sohw Room</button>
               </p>
            </div>

          </div>
          <div class="face face2">
            <h2>2:30 4:00 AM</h2>

          </div>

        </div>
        <div class="card">
          <div class="face face1">
            <div class="content">
              <h2 style="font-size:16px;">Booking Room</h2>
               <p>
                 <button class="bg bg-primary" type="button" onclick="ShowRoomFour()">Sohw Room</button>
               </p>
            </div>

          </div>
          <div class="face face2">
            <h2>4:00 5:30 AM</h2>

          </div>

        </div>

        </div>
        </div>
        <script type="text/javascript">
        function ShowRoomEight() {
          AvaiableShow();
          show.style.display="none";
          hideavailable.style.display="none";
          hideavailable1.style.display="none";
         var database=firebase.database();
         var ref=database.ref('routine');
         ref.on('value',getData,errorData);
        }
        </script>
        <script type="text/javascript">
        function ShowRoomTen() {
          AvaiableShow();

          show.style.display="none";
         var database=firebase.database();
         var ref=database.ref('routine');
         ref.on('value',getData1,errorData1);
        }
        </script>
        <script type="text/javascript">
        function ShowRoomEleven() {
          AvaiableShow();

          show.style.display="none";
         var database=firebase.database();
         var ref=database.ref('routine');
         ref.on('value',getData2,errorData2);
        }
        </script>
        <script type="text/javascript">
        function ShowRoomOne() {
          AvaiableShow();

          show.style.display="none";
         var database=firebase.database();
         var ref=database.ref('routine');
         ref.on('value',getData3,errorData3);
        }
        </script>
        <script type="text/javascript">
        function ShowRoomTwo() {
          AvaiableShow();

          show.style.display="none";
         var database=firebase.database();
         var ref=database.ref('routine');
         ref.on('value',getData4,errorData4);
        }
        </script>
        <script type="text/javascript">
        function ShowRoomFour() {
          AvaiableShow();

          show.style.display="none";
         var database=firebase.database();
         var ref=database.ref('routine');
         ref.on('value',getData5,errorData5);
        }
        </script>
        <table>


        <script>
        function getData(snapshot){

          var days=document.getElementById("dates").value;
           var rm=new Array(10);
           var temp="";
           var temp1="<option>Select Room</option>";
           var lengths;
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
             var namer=scor[k].day;
             var ag=scor[k].period;
             if(ag==1){
               var rm=new Array(10);
                rm=scor[k].rooms;
                 lengths=rm.length;

        }
     }
   }

   for (var i = 0; i < lengths; i++) {


      temp+="<tr>";
      temp+="<td>"+rm[i]+"</td>";

      temp+="</tr>";

      temp1+="<option>"+rm[i]+"</option>";

   }
   document.getElementById("datas").innerHTML=temp;
   document.getElementById("opt").innerHTML=temp1;

 }

    </script>
        </table>
        <table>


        <script>
        function getData1(snapshot){

          var days=document.getElementById("dates").value;
           var rm=new Array(10);
           var temp="";
           var temp1="<option>Select Room</option>";
           var lengths;
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
             var namer=scor[k].day;
             var ag=scor[k].period;
             if(ag==2){
               var rm=new Array(10);
                rm=scor[k].rooms;
                 lengths=rm.length;

        }
     }
   }

   for (var i = 0; i < lengths; i++) {


      temp+="<tr>";
      temp+="<td>"+rm[i]+"</td>";

      temp+="</tr>";

      temp1+="<option>"+rm[i]+"</option>";

   }
   document.getElementById("datas").innerHTML=temp;
   document.getElementById("opt").innerHTML=temp1;

 }

    </script>
        </table>
        <table>


        <script>
        function getData2(snapshot){

          var days=document.getElementById("dates").value;
           var rm=new Array(10);
           var temp="";
           var temp1="<option>Select Room</option>";
           var lengths;
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
             var namer=scor[k].day;
             var ag=scor[k].period;
             if(ag==3){
               var rm=new Array(10);
                rm=scor[k].rooms;
                 lengths=rm.length;

        }
     }
   }

   for (var i = 0; i < lengths; i++) {


      temp+="<tr>";
      temp+="<td>"+rm[i]+"</td>";

      temp+="</tr>";

      temp1+="<option>"+rm[i]+"</option>";

   }
   document.getElementById("datas").innerHTML=temp;
   document.getElementById("opt").innerHTML=temp1;

 }

    </script>
        </table>
        <table>


        <script>
        function getData3(snapshot){

          var days=document.getElementById("dates").value;
           var rm=new Array(10);
           var temp="";
           var temp1="<option>Select Room</option>";
           var lengths;
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
             var namer=scor[k].day;
             var ag=scor[k].period;
             if(ag==4){
               var rm=new Array(10);
                rm=scor[k].rooms;
                 lengths=rm.length;

        }
     }
   }

   for (var i = 0; i < lengths; i++) {


      temp+="<tr>";
      temp+="<td>"+rm[i]+"</td>";

      temp+="</tr>";

      temp1+="<option>"+rm[i]+"</option>";

   }
   document.getElementById("datas").innerHTML=temp;
   document.getElementById("opt").innerHTML=temp1;

 }

    </script>
        </table>
        <table>


        <script>
        function getData4(snapshot){

          var days=document.getElementById("dates").value;
           var rm=new Array(10);
           var temp="";
           var temp1="<option>Select Room</option>";
           var lengths;
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
             var namer=scor[k].day;
             var ag=scor[k].period;
             if(ag==5){
               var rm=new Array(10);
                rm=scor[k].rooms;
                 lengths=rm.length;

        }
     }
   }

   for (var i = 0; i < lengths; i++) {


      temp+="<tr>";
      temp+="<td>"+rm[i]+"</td>";

      temp+="</tr>";

      temp1+="<option>"+rm[i]+"</option>";

   }
   document.getElementById("datas").innerHTML=temp;
   document.getElementById("opt").innerHTML=temp1;

 }

    </script>
        </table>
        <table>


        <script>
        function getData5(snapshot){

          var days=document.getElementById("dates").value;
           var rm=new Array(10);
           var temp="";
           var temp1="<option>Select Room</option>";
           var lengths;
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
             var namer=scor[k].day;
             var ag=scor[k].period;
             if(ag==6){
               var rm=new Array(10);
                rm=scor[k].rooms;
                 lengths=rm.length;

        }
     }
   }

   for (var i = 0; i < lengths; i++) {


      temp+="<tr>";
      temp+="<td>"+rm[i]+"</td>";

      temp+="</tr>";

      temp1+="<option>"+rm[i]+"</option>";

   }
   document.getElementById("datas").innerHTML=temp;
   document.getElementById("opt").innerHTML=temp1;

 }

    </script>
        </table>
        <script type="text/javascript">
        function errorData(snapshot){
        console.log("Rrror!!");
        }
        </script>
        <script type="text/javascript">
        function errorData1(snapshot){
        console.log("Rrror!!");
        }
        </script>
        <script type="text/javascript">
        function errorData2(snapshot){
        console.log("Rrror!!");
        }
        </script>
        <script type="text/javascript">
        function errorData3(snapshot){
        console.log("Rrror!!");
        }
        </script>
        <script type="text/javascript">
        function errorData4(snapshot){
        console.log("Rrror!!");
        }
        </script>
        <script type="text/javascript">
        function errorData5(snapshot){
        console.log("Rrror!!");
        }
        </script>
        <button id="hideavailable1" style="margin-left:630px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Room Boking</button>
        <button id="hideReservation" style="margin-left:390px;margin-top:20px;width:600px;" type="button" class="btn btn-success" onclick="reservation()">My Reservation Boking List </button>
<table class="table table-dark"style="text-align:center;margin-top:60px;width:600px;margin-left:390px;">
  <thead>
    <tr>
      <th id="hideavailable">Available Room</th>
    </tr>
  </thead>
 <tbody id="datas">

 </tbody>

 </table>

 <table id="MyReservationHide" class="table table-dark"style="text-align:center;margin-top:10px;width:600px;margin-left:390px;">
   <thead>
     <tr>

       <th>Date</th>
       <th>Room</th>
       <th>Resuester</th>
       <th>Remark</th>
     </tr>

   </thead>
  <tbody id="Reservations">

  </tbody>

  </table>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Room Boking</h4>
        </div>
        <div class="modal-body">
          <p style="text-align:center">Select Room</p>
          <select style=" margin-left:80px;" id="opt">
          <option class="form-control">Select Room</option>

         </select>

          <textarea id="remark" style="margin-top:10px;" class="form-control"placeholder="Enter Your Text" rows="4" cols="35"></textarea>
          <p style="margin-top:5px;">These rooms are available on your selected date and period.you're not done just with selecting the roon.One of the administrators will confirm your room so that you do not have to run conflict. you will be notified upon confrimation.
                    Have a good day,sir/Madam</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success"onclick="datapushmethod()" >Booking</button>
        </div>
      </div>
    </div>
  </div>


  <script type="text/javascript">
  function datapushmethod(){
       var database=firebase.database();
       var ref=database.ref('reservation');
       var days=document.getElementById("dates").value;
       var room=document.getElementById("opt").value;
       var remarks=document.getElementById("remark").value;
       var periods="1";
       var stats=1;
       var ClintEmails=localStorage.getItem("Email");

       var datasate={
         askedBy:ClintEmails,
         date:days,
         period:periods,
         remark:remarks,
         roomNo:room,
         status:stats
       };
       ref.push(datasate);
       alert("SuucessFully");
       hideReservation.style.display="none";
       console.log(days);
       console.log(room);
       console.log(remarks);
       console.log(periods);
       console.log(status);

        window.location="Show-Routine.php";

  }

  </script>
  <script type="text/javascript">
  function reservation(){
      MyReservationShow();
      //MyReservationShow1();
      //MyReservationShow2();
    var database=firebase.database();
    var ref=database.ref('reservation');
    ref.on('value',ReservationAllshow,ReservationError);

  }
  function ReservationAllshow(snapshot){
    var datesall;

   var Emails=localStorage.getItem("Email");
    var REservation=document.getElementById("Reservations").value;
     var rm=new Array(100);
     var temp="";
     var temp1="";
     var temp2="";
     var lengths;
     var Eml;
     var Remarks;
   var scor=snapshot.val();
   var keys=Object.keys(scor);
   console.log(keys);

   console.log(Emails);

   for(var i=0;i<keys.length;i++){
     var k=keys[i];
        Eml=scor[k].askedBy;
        if(Eml==Emails){
          datesall=scor[k].date;
          AskRoom=scor[k].roomNo;
          AskEmail=scor[k].askedBy;
          Remarks=scor[k].remark;
          lengths=datesall.length;
          console.log(datesall);
          console.log(AskRoom);
          console.log(AskEmail);

          temp+="<tr>";
          temp+="<td>"+datesall+"</td>";
          temp+="<td>"+AskRoom+"</td>";
          temp+="<td>"+AskEmail+"</td>";
          temp+="<td>"+Remarks+"</td>";
          temp+="</tr>";
        }
}
for (var i = 0; i < lengths; i++) {



}

document.getElementById("Reservations").innerHTML=temp;
}



function ReservationError(){
  console.log("Errorrrrrrrr");
}
  </script>


  </body>
</html>
