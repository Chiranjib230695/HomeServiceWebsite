 <?php
session_start();
include 'config.php';
        $_SESSION["username"] = "admin";
		$password = $_POST['oldpass'];
        $newpassword = $_POST['newpass'];
        $confirmnewpassword = $_POST['confirmpass'];
       
        $result = mysqli_query($db, "SELECT * from login WHERE username='" . $_SESSION["username"] . "'");
        $row = mysqli_fetch_array($result);
        
        if(!$result)
        {
		header("Refresh:3; url=changepassword.php");
		echo "The username you entered does not exist";
		}
        else if($password!== $row["password"])
        {
		header("location:changepassword.php?err=1");
        }
        else if($newpassword !== $confirmnewpassword)
		{
		header("location:changepassword.php?mismatch=1");
		}        
		else if($newpassword == $confirmnewpassword)
		{   
        mysqli_query($db, "UPDATE `login` SET `password` = '$newpassword' WHERE `login`.`username` = 'admin';");
        header("location:changepassword.php?ok=1");
    }
    
    else
        {
       echo "Passwords do not match";
       }
      ?>