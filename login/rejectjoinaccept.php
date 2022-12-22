<?php
include "config.php";
$id=$_GET['id'];
$sql="INSERT INTO reject
SELECT * FROM  accept WHERE id =$id";
$result=mysqli_query($db,$sql);
$sqldel = "DELETE FROM accept WHERE ID=$id";
$resultdel=mysqli_query($db,$sqldel);
if($result)
{
	header('location:viewaccept.php?');

}
else
{
	echo mysql_error;
}
?>