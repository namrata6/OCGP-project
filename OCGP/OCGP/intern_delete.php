<?php


$con = mysqli_connect("localhost","root","naushad","register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$id=$_REQUEST['id'];
$query = "DELETE FROM intern WHERE id=$id"; 
$result = mysqli_query($con,$query);
header("Location: admin_intern.php"); 
?>