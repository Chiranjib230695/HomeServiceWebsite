<?php
require_once('config.php');

?>

<?php
	
	if (isset($_POST['name']) AND 
    isset($_POST['gender']) AND
    isset($_POST['address']) AND 
    isset($_POST['state']) AND 
    isset($_POST['city']) AND 
    isset($_POST['pin']) AND 
    isset($_POST['occu']) AND  
    isset($_POST['phonenumber']))
	{	
		$name = mysqli_real_escape_string($db,$_POST['name']);
		$gender = mysqli_real_escape_string($db,$_POST['gender']);
		$address = mysqli_real_escape_string($db,$_POST['address']);
		$state = mysqli_real_escape_string($db,$_POST['state']);
		$city = mysqli_real_escape_string($db,$_POST['city']);
		$pin = mysqli_real_escape_string($db,$_POST['pin']);
		$occu = mysqli_real_escape_string($db,$_POST['occu']);
		$phonenumber = mysqli_real_escape_string($db,$_POST['phonenumber']);

		if( empty($name) or 
        empty($gender) or
        empty($address) or 
        empty($state) or 
        empty($city) or 
        empty($pin) or 
        empty($occu) or 
        empty($phonenumber)) 
        {

          $message = "All Information Is neccessary";

    	}
    	else
    	{
	
			$sql = "select * from joining where phonenumber = '$phonenumber' AND occu = '$occu' ";
			$result = mysqli_query($db, $sql);
			$count = mysqli_num_rows($result);
			
			
			if($count == 0) //== aa hbo
				{
			  	
				  	$sql1 = "INSERT INTO joining (id,name,gender,address, state, city,pin,occu,phonenumber) VALUES (NULL,'$name','$gender','$address','$state','$city','$pin','$occu','$phonenumber')";
				  	$result1 = mysqli_query($db,$sql1);
				  	//echo("Error description: " . mysqli_error($db));
						
						if($result1) 
							{
							echo 'Registration details Successfully Saved! We will contact you soon. Thank You';	
							}
						else
						{
							echo 'Check details carefully!';
						}
			  			
				}
			
			if($count != 0)
				{
					echo 'Phone Number with similar occupation already registered!';
				}
			
			if(!$result)
				{
					echo 'Check registration details carefully!';
				}
		
		}

}
$db -> close();

?>
