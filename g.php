<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <body>

    <style media="screen">
      body{
        margin: 0;
        padding: 0;
        display: flex;
        justify-content:center;
        align-items: center;
        min-height: 100vh;
        font-family: 'Poppins',sans-serif;
        background: linear-gradient(45deg,#111,#09afff);

      }
      .container{
        max-width: 1200px;
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

    <div class="container">
      <div class="card">
        <div class="face face1">
          <div class="content">
            <h2 style="font-size:16px;">Booking Room</h2>
             <p>
                <button class="bg bg-primary" type="button" name="button">Sohw Room</button>
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
               <button class="bg bg-primary" type="button" name="button">Sohw Room</button>
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
               <button class="bg bg-primary" type="button" name="button">Sohw Room</button>
             </p>
          </div>

        </div>
        <div class="face face2">
          <h2>8:30 10:00 AM</h2>

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
                 <button class="bg bg-primary" type="button" name="button">Sohw Room</button>
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
                 <button class="bg bg-primary" type="button" name="button">Sohw Room</button>
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
                 <button class="bg bg-primary" type="button" name="button">Sohw Room</button>
               </p>
            </div>

          </div>
          <div class="face face2">
            <h2>8:30 10:00 AM</h2>

          </div>

        </div>

        </div>



  </body>
</html>
