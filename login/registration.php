<?php
require_once('config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
    <style>
      body {
    margin: 0;
    padding: 0;
    background-color: white;
    height: 100vh;
  }
  
  
  </style>
</head>
<body> 
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
        <a class="nav-link" href="../index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../about.html">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../card.html">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>    
    </ul>
  </div>
  <form class=" form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>  
</nav>
    <div class="container">
    <form class="form-horizontal " action="registration.php" id="form" method="POST">
        
            
        <fieldset class="text-dark">
            
        
        <!-- Form Name -->
        <h1 class="text-dark text-5xl">Apply Form</h1>
        
        <!-- Text input-->
        <div class="form-group pt-3">
          <label class="col-md-4 control-label" for="name">Name</label>  
          <div class="col-md-4">
          <input id="name" name="name" type="text" placeholder="Enter Name" class="form-control input-md" required>
            
          </div>
        </div>
             
        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="radios">Gender</label>
          <div class="col-md-4">
          <div class="radio">
            <label for="radios-0">
              <input type="radio" name="gender" id="gender" value="Male" required="required">
              Male
            </label>
            </div>
          <div class="radio">
            <label for="radios-1">
              <input type="radio" name="gender" id="gender" value="Female" required="required">
              Female
            </label>
            </div>
          </div>
        </div>
        
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="address">Adderss</label>
          <div class="col-md-4">                     
            <textarea class="form-control" id="address" name="address" placeholder="Enter Address" required></textarea>
          </div>
        </div>
        
        
        <div class="form-group">
          <label class="col-md-4 control-label" for="state">State</label>
          <div class="col-md-4">	
	        <select name="state" id="state" class="form-control" required>
			<option value="Andhra Pradesh">Andhra Pradesh</option>
			<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
			<option value="Arunachal Pradesh">Arunachal Pradesh</option>
			<option value="Assam">Assam</option>
			<option value="Bihar">Bihar</option>
			<option value="Chandigarh">Chandigarh</option>
			<option value="Chhattisgarh">Chhattisgarh</option>
			<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
			<option value="Daman and Diu">Daman and Diu</option>
			<option value="Delhi">Delhi</option>
			<option value="Lakshadweep">Lakshadweep</option>
			<option value="Puducherry">Puducherry</option>
			<option value="Goa">Goa</option>
			<option value="Gujarat">Gujarat</option>
			<option value="Haryana">Haryana</option>
			<option value="Himachal Pradesh">Himachal Pradesh</option>
			<option value="Jammu and Kashmir">Jammu and Kashmir</option>
			<option value="Jharkhand">Jharkhand</option>
			<option value="Karnataka">Karnataka</option>
			<option value="Kerala">Kerala</option>
			<option value="Madhya Pradesh">Madhya Pradesh</option>
			<option value="Maharashtra">Maharashtra</option>
			<option value="Manipur">Manipur</option>
			<option value="Meghalaya">Meghalaya</option>
			<option value="Mizoram">Mizoram</option>
			<option value="Nagaland">Nagaland</option>
			<option value="Odisha">Odisha</option>
			<option value="Punjab">Punjab</option>
			<option value="Rajasthan">Rajasthan</option>
			<option value="Sikkim">Sikkim</option>
			<option value="Tamil Nadu">Tamil Nadu</option>
			<option value="Telangana">Telangana</option>
			<option value="Tripura">Tripura</option>
			<option value="Uttar Pradesh">Uttar Pradesh</option>
			<option value="Uttarakhand">Uttarakhand</option>
			<option value="West Bengal">West Bengal</option>
			</select>
		  </div>
		</div>


		 <div class="form-group pt-3">
          <label class="col-md-4 control-label" for="city">City/District</label>  
          <div class="col-md-4">
          <input id="city" name="city" type="text" placeholder="Enter City/District" class="form-control input-md" required>
            
          </div>
        </div>
	
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="pin" >Pin</label>  
          <div class="col-md-4">
          <input id="pin" name="pin" type="number" placeholder="Enter Pin" class="form-control input-md" required>
            
          </div>
        </div>
        
        <!-- Select Multiple -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="occu">Occupation</label>
          <div class="col-md-4">
            <select id="occu" name="occu" class="form-control" required>
            <option  value="">Select Work Role</option>
              <option value="Painter" >Painter</option>
              <option value="Plumber" >Plumber</option>
              <option value="Electrician" >Electrician</option>
              <option value="Carpenter" >Carpenter</option>
              <option value="Tiling and Tyles Fitting" >Tiling and Tyles Fitting</option>
              <option value="Wallpaper Fitting" >Wallpaper Fitting</option>
              <option value="Aluminum Frame and Glass Fitting" >Aluminum Frame and Glass Fitting</option>
              <option value="Water Tank Cleaning" >Water Tank Cleaning</option>
              <option value="False ceiling Fitting" >False ceiling Fitting</option>
              <option value="Pest Control" >Pest Control</option>
              <option value="Roof Fitting" >Roof Fitting</option>
              <option value="CCTV Camera Instalation" >CCTV Camera Instalation</option>
              <option value="Interior Designing" >Interior Designing</option>
              <option value="Kitchen Designing" >Kitchen Designing</option>
              <option value="Machinery" >Machinery</option>
              <option value="Machinery" >As a helper in any above category</option>
            </select>
          </div>
        </div>
        
        <!-- Prepended Number-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="phonenumber">Phone</label>
          <div class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon">+91</span>
              <input id="phonenumber" name="phonenumber" class="form-control" placeholder="000-000-0000" type="number" required>
            </div>
            
          </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="register"></label>
          <div class="col-md-4">
            <button id="register" name="register" class="btn btn-success">Apply</button>
          </div>
        </div>
            </div>
        
        </fieldset>
        
        
        </form>
    </div>

    
<script src="jquery-3.5.1.js"></script>
<script src="sweetalert2.all.min.js"></script>
<script type="text/javascript">
	$(function()
	{
		
		$('#register').click(function(e){

			var valid = this.form.checkValidity();
			
			if(valid)
			{
				var name 		= $('#name').val();
      			var gender  	= $('#gender').val();
				var address 	= $('#address').val();
				var state 		= $('#state').val();
				var city 		= $('#city').val();
				var pin 		= $('#pin').val();
				var occu 		= $('#occu').val();
				var phonenumber = $('#phonenumber').val();

				e.preventDefault();

				$.ajax({
					type : 'POST',
					url  : 'process.php',
					data : {name: name, gender: gender, address: address,state: state, city: city, pin : pin, occu : occu, phonenumber: phonenumber},

					success: function(data)
          {
            Swal.fire
            ({
  					 //title: data,
  					    text: data,
  					  //icon: 'success',
  					    confirmButtonText: 'Okay',
             })
          }, 
					error: function(data)
          {
						Swal.fire
            ({
						  title: 'UnSuccessful',
						  text: 'Not Registered ',
						  icon: 'error',
						  confirmButtonText: 'Okay',
          	})
         }
					
				});
				
			}

		});		
		
	});

</script>

        
</body>
</html>