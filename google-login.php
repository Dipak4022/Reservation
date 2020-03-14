<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>

      <!-- The core Firebase JS SDK is always required and must be listed first -->
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
      //firebase.analytics();
      function googleLog(){
        //first of all create google provider object

        var provider=new firebase.auth.GoogleAuthProvider();
        //Login with popup window
        firebase.auth().signInWithPopup(provider).then(function () {
            //code executes after successful login
            //window.location="Show-Routine.php";
          //  window.location="index.html";
          //window.onload=Googl;
          console.log("Dipak Debnath");
          firebase.auth().onAuthStateChanged(function(user) {
        if (user) {

          // User is signed in.

          var mail="dipak35-2455@diu.edu.bd";
          var displayName = user.displayName;
          var email = user.email;

          var emailVerified = user.emailVerified;
          var photoURL = user.photoURL;
          var isAnonymous = user.isAnonymous;
          var uid = user.uid;
          var providerData = user.providerData;
          console.log(displayName);
          console.log(emailVerified);
          console.log(photoURL);
          console.log(isAnonymous);
          console.log(user);
          //document.getElementById("one").innerHTML=email;
          //document.getElementById("one1").innerHTML=displayName;
          //document.getElementById("myp").setAttribute("src",photoURL);
          //var allData "

              //$_SESSION['Email'] = email;
              //$_SESSION['Name'] = displayName;
              //$_SESSION['Images'] = photoURL;
            localStorage.setItem("Email",email);
            localStorage.setItem("EmailName",displayName);
            localStorage.setItem("EmaiImage",photoURL);
          if(mail==email){
             window.location="index.php";
          }else{
            window.location="Show-Routine.php";
          }
          // ...
        } else {
          // User is signed out.

        }
        });
        }).catch(function (error) {
            var errorMessage=error.message;
            alert(errorMessage);
        });
      }


//window.onload=googleLog;
</script>
<body>
  <center>
      <h1 style="margin-top:100px;">Welcome  Class Reservation System</h1>

    </center>


     <div class="container">

       <!-- Outer Row -->
       <div class="row justify-content-center">

         <div class="col-xl-10 col-lg-12 col-md-9">

           <div class="card o-hidden border-0 shadow-lg my-5">
             <div class="card-body p-0">
               <!-- Nested Row within Card Body -->
               <div class="row">
                 <div class="col-lg-2"></div>
                 <div class="col-lg-8">
                   <div class="p-5">
                     <div class="text-center">
                       <h1 class="h4 text-gray-900 mb-4">Login</h1>
                     </div>


                       <button type="submit"id="googlebtn"onclick="googleLog()"name="Login_btn"class="btn btn-primary btn-user btn-block">
                        Google Login
                       </button>

                     </form>
                     <style media="screen">
                       #log{
                         margin-right: 10px;
                       }
                     </style>
                     <hr>

                   </div>
                 </div>
                 <div class="col-lg-2"></div>
               </div>
             </div>
           </div>

         </div>

       </div>

     </div>

</body>
</html>
