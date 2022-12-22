<?php
	session_start();
	if(!isset($_SESSION["status"]))
	{
		header("location:index.php");	
	}
?>
<?php
	
	include "config.php";
	if(isset($_POST["login"]))
	{
		$username=$_POST["username"];
		$password=$_POST["password"];
		
		$sql="select * from login where password='$password'";
		$result=mysqli_query($db,$sql);
		$n=mysqli_num_rows($result);
		if($n==0)
		{
			header("location:loginadmin.php?log=0");
			return;	
		}
		else
		{
			$row=mysqli_fetch_assoc($result);
			if($password==$row["password"])
			{
				if($username=="admin")
				{
					$_SESSION["status"]=true;
					$_SESSION["user"]=$username;
					header("location:admindash.php");	
				}
			}
			else
			{
				header("location:loginadmin.php?log=1");
			}
		}
	}
?>