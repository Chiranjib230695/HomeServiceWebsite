<?php
include "config.php";
$id=$_GET['id'];
$sql="INSERT INTO joining
SELECT * FROM  reject WHERE id =$id";
$result=mysqli_query($db,$sql);
$sqldel = "DELETE FROM reject WHERE ID=$id";
$resultdel=mysqli_query($db,$sqldel);
if($result)
{
	header('location:viewreject.php?');

}
else
{
	echo mysql_error;
}
?>