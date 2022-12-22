<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;    
  }
 .bgcol {
    
    background-color:white;
      }
  </style>
</head>
<body style="background-color:white;">


<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">
    <img src="img/logo.png" alt="Logo" style="width:150px;">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="card.html">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>    
    </ul>
  </div>
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>  
</nav>
<!-- Slider Starts -->
<div class="container pt-3 pb-3 my-3 border" style="width: 100%; margin: 0 auto;" >
      <div id="slid" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#slid" data-slide-to="0" class="active"></li>
        <li data-target="#slid" data-slide-to="1"></li>
        <li data-target="#slid" data-slide-to="2"></li>
      </ul>
      
      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/s1.jpg" alt="Intro" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="img/s2.jpg" alt="Painter" width="1100" height="500">
        </div>
        <div class="carousel-item">
          <img src="img/s3.jpg" alt="cctv" width="1100" height="500">
        </div>
      </div>
      
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#slid" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#slid" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
  </div>
</div>
<div class="flex justify-center pt-6" >
        <h1 class=" text-5xl">  Our Services </h1>
    </div>

    <!--start-->

    <div class="card-deck">
        <div class="mt-5 p-2 card">
          <img src="img/plumber.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>1. Plumber </b> </h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Intrasted to booking 1.Painter,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/plumber.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>2. Painter </b></h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Intrasted to booking 2. Painter,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/plumber.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>3. Electrician </b></h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Intrasted to booking 3. Electrician,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
      </div>
      <div class="card-deck">
        <div class="mt-5 p-2 card">
          <img src="img/plumber.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>4. Carpenter  </b></h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Intrasted to booking 4. Carpenter,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/plumber.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>5. Tiling and Tyles fitting </b></h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Intrasted to booking 5. Tiling and Tyles fitting,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/plumber.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>6. Wallpaper fitting </b></h5>
        <p></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Intrasted to booking 6. Wallpaper fitting,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
      </div>
      <div class="card-deck">
        <div class="mt-5 p-2 card">
          <img src="img/plumber.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>7. Aluminum Frame and Glass fitting </b> </h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Intrasted to booking 7. Aluminum Frame and Glass fitting,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/plumber.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>8. Water Tank Cleaning </b></h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Intrasted to booking 8. Water Tank Cleaning,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/plumber.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>9. Fall chilling fitting </b> </h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Intrasted to booking 9. Fall chilling fitting ,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
      </div>
      <div class="card-deck">
        <div class="mt-5 p-2 card">
          <img src="img/plumber.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>10. Pest Control  </b> </h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Intrasted to booking 10. Pest Control ,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/plumber.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>11. Roof fitting </b></h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Intrasted to booking 11. Roof fitting,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/plumber.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>12. CCTV camera fitting </b> </h5>
        <p></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Intrasted to booking 12. CCTV camera fitting,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
      </div>
      <div class="card-deck">
        <div class="mt-5 p-2 card">
          <img src="img/plumber.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>13. Interior designer </b></h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Intrasted to booking 13. Interior designer,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/plumber.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>14. Kitchen designer </b></h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Intrasted to booking 14. Kitchen designer,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/plumber.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><b>15. Masonry </b></h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Intrasted to booking 15. Masonry,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
      </div>
    <!-- end-->
  
      
  </div>
</div>




    
  
<div class="mt-5 container ">
<div class="card mb-3">
  <img src="img/logg.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="text-3xl flex justify-center"><b> About </b></h3>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>   
    </div> 

</body>
</html>


