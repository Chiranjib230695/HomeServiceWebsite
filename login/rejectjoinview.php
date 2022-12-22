<?php
include "config.php";
$id=$_GET['id'];
$sql="INSERT INTO reject
SELECT * FROM  joining WHERE id =$id";
$result=mysqli_query($db,$sql);
$sqldel = "DELETE FROM joining WHERE ID=$id";
$resultdel=mysqli_query($db,$sqldel);
if($result)
{
	header('location:viewjoining.php?');

}
else
{
	echo mysql_error;
}
?>