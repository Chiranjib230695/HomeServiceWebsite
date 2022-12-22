<?php
require_once('config.php');
session_start();
?>
<?php
	if(!isset($_SESSION["status"]))
	{
		header("location:index.php");	
	}
?>
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
	<p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="left">&nbsp;</p><p align="right">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
<p align="center"><span style="text-align: center; font-size: 26px; font-style: normal; font-weight: bold;">Change Password</span></p>
<table width="490" border="0" align="center">
    <tr>
      <td width="401"><input name="oldpass" type="password" id="oldpass" placeholder="Old Password" class="form-control"></td>
    </tr>
    <tr>
      <td><input name="newpass" type="password" id="newpass" placeholder="New Password" class="form-control"></td>
    </tr>
    <tr>
      <td><input name="confirmpass" type="password" id="confirmpass" placeholder="Confirm New Password" class="form-control"></td>
    </tr>
  </table>
  <table width="200" border="0" align="center">
    <tr>
      <td width="95"><input name="submit" type="submit" class="btn btn-primary" id="submit" value="Confirm"></td>
      <td width="89"><input name="submit2" type="submit" class="btn btn-primary" id="submit2" value="Cancel" formaction="admindash.php"></td>
    </tr>
  </table>
</body>
</html>

<?php
	if(isset($_GET["ok"]))
	{
		echo '<script> alert("Password has been changed successfully"); </script>';	
	}
	if(isset($_GET["err"]))
	{
		echo '<script> alert("Old Password is Incorrent"); </script>';	
	}
		if(isset($_GET["mismatch"]))
	{
		echo '<script> alert("New and Confirm Passwords does not matches"); </script>';	
	}
?>