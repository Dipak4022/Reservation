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
  <body>


     <div class="container">

       <!-- Outer Row -->
       <div class="row justify-content-center">

         <div class="col-xl-10 col-lg-12 col-md-9">

           <div class="card o-hidden border-0 shadow-lg my-5">
             <div class="card-body p-0">

               <div class="row">
                 <div class="col-lg-2"></div>
                 <div class="col-lg-8">
                   <div class="p-5">
                     <div class="text-center">
                       <h1 class="h4 text-gray-900 mb-4">Login</h1>
                     </div>

                  
                       <div class="form-group">
                         <input id="emails" type="email"name="email" class="form-control form-control-user"  aria-describedby="emailHelp" placeholder="Enter Email Address..." required="required">
                       </div>
                       <div class="form-group">
                         <input id="passwords" type="password"name="password" class="form-control form-control-user"  placeholder="Password"required="required">
                       </div>
                       <div class="form-group">
                         <div class="custom-control custom-checkbox small">
                           <input type="checkbox" class="custom-control-input" id="customCheck">
                           <label class="custom-control-label" for="customCheck">Remember Me</label>
                         </div>
                       </div>
                       <button type="submit"name="Login_btn" onclick="AdminLogin()" class="btn btn-primary btn-user btn-block">
                        Admin Login
                       </button>


                     <style media="screen">
                       #log{
                         margin-right: 10px;
                       }
                     </style>
                     <hr>
                     <div class="text-center">
                       <a class="small" href="forgot-password-student.php">Forgot Password </a>

                     </div>

                   </div>
                 </div>
                 <div class="col-lg-2"></div>
               </div>
             </div>
           </div>

         </div>

       </div>

     </div>
     <script type="text/javascript">
     function AdminLogin(){
       var email="dipak2455@gmail.com"
       var pass="1234";
       var emal =document.getElementById("emails").value;

       var passw =document.getElementById("passwords").value;
       console.log(emal);
       console.log(passw);
       if(email==emal && pass==passw){

          //alert("Sucessfully Login.");
           window.location="Admin-panale.php";
         }
       else{
         alert("Wrong Passwordm or password. please Correct email Address!!");
       }
     }



     </script>






  </body>
</html>
