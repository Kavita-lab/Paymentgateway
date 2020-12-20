<?php

$id=$_GET['id'];

$conn=mysqli_connect("localhost","root","","exicutive");

$query="DELETE FROM  payment_details WHERE id='$id'";
$result=mysqli_query($conn,$query);

if($result)
{ echo " data has been deleted";}

header("location:db_table.php");
?>