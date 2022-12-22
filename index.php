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
        <a class="nav-link" href="about.html">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.php">Services</a>
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
          <img src="img/s1.jpg" alt="Intro" width="700" height="300">
        </div>
        <div class="carousel-item">
          <img src="img/s2.jpg" alt="Painter" width="700" height="300">
        </div>
        <div class="carousel-item">
          <img src="img/s3.jpg" alt="cctv" width="700" height="300">
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
<div class="card-deck">
        <div class="mt-5 p-2 card">
          <img src="img/plumber.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">1. Plumber </h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Interested in booking Plumber,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/painter.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">2. Painter</h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Interested in booking Painter,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/electrician.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">3. Electrician</h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Interested in booking Electrician,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
      </div>
      



      <div class="card-deck">
        <div class="mt-5 p-2 card">
          <img src="img/carpenter.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">4. Carpenter </h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Interested in booking Carpenter,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/tiling.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">5. Tiling and Tyles fitting</h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Interested in booking Tiling and Tyles fitting,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/wallpaper.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">6. Wallpaper fitting</h5>
        <p></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Interested in booking Wallpaper fitting,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
      </div>
      <div class="card-deck">
        <div class="mt-5 p-2 card">
          <img src="img/aluminium.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">7. Aluminum Frame and Glass fitting </h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Interested in booking Aluminum Frame and Glass fitting,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/watertank.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">8. Water Tank Cleaning</h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Interested in booking Water Tank Cleaning,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/falseceling.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">9. Fall chilling fitting </h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Interested in booking Fall chilling fitting ,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
      </div>
      <div class="card-deck">
        <div class="mt-5 p-2 card">
          <img src="img/pest.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">10. Pest Control  </h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Interested in booking Pest Control ,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/roofing.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">11. Roof fitting</h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Interested in booking Roof fitting,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/cctv.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">12. CCTV camera fitting </h5>
        <p></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Interested in booking CCTV camera fitting,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
      </div>
      <div class="card-deck">
        <div class="mt-5 p-2 card">
          <img src="img/interior.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">13. Interior designer</h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Interested in booking Interior designer,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/kitchen.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">14. Kitchen designer</h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Interested in booking Kitchen designer,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
        </div>
        <div class="mt-5 p-2 card">
          <img src="img/masonry.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">15. Civil and Masonry</h5>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <a href="tel:+91-700-250-9665"> <button type="button" class="btn btn-info btn-lg"><i class="fa fa-phone-square"  style="font-size:24px"></i> Call Booking</button> </a>
            <a href="https://api.whatsapp.com/send?phone=7002509665&text=Hello%20Sir,I'm Interested in booking Civil and Masonry,"> <button type="button" class="btn btn-success btn-lg"><i class="fa fa-whatsapp"  style="font-size:24px"></i>WhatsApp</button> </a>
          </div>
          
        </div>
      </div>




    
  
<div class="mt-5 container ">
<div class="card mb-3">
  <img src="img/logg.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="text-3xl text-dark  flex justify-center"><b> About </b></h3>
    <p class="text-dark">Your affordable solutions 24 X 7 @SMART HOME SOLUTION
Our Goal is to provide you best home solutions 24 X 7. Its been years whenever people face any house hold problems they call nearby available peoples who are mostly unskilled and unprofessionals who provides their non standard services and drain your pockets. And sometimes those things do not last long.
With the new era technology is been advanced and we provide you the solutios to most of your house hold problems in your finger tips with SMART HOME FITTINGS.com
We provide you well qualified and trained professionals at your doorsteps to solve your problems for your better convenience and we also provide good house hold materials.</p>
    
  </div>
</div>   
    </div> 
    <?php
    include('test121.html');
    ?>
    

</body>
</html>


