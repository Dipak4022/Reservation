<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Dipak Debnath</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>

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
      firebase.analytics();
    </script>

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


                       <button type="submit"id="googlebtn"onclick="GoogleLogin()"name="Login_btn"class="btn btn-primary btn-user btn-block">
                        Google Login
                       </button>
                       <p id="emails"></p>

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


<script src="google.js"type="text/javascript"></script>

<script type="text/javascript">
function GoogleLogin() {
    //first of all create google provider object

    var provider=new firebase.auth.GoogleAuthProvider();
    //Login with popup window
    firebase.auth().signInWithPopup(provider).then(function () {
        //code executes after successful login
        function newLogin(user){
         if(user){
            apps(user);

          }
        }
        firebase.auth().onAuthStateChanged(newLogin);
      }

        window.location="Show-Routine.php";



    }).catch(function (error) {
        var errorMessage=error.message;
        alert(errorMessage);
    });

}


function apps(user){

  var adminmail="dipak35-2455@diu.edu.bd"
  var mail=user.email;
  console.log(mail);
document.getElementById("emails").innerHTML=user.displayName;

}

</script>



  </body>
</html>
