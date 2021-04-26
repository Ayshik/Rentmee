<?php
session_start();
include('db_connect.php');
if(isset($_SESSION["loggedinuser"]))
{
$a = $_GET['sl'];
$b = $_GET['name'];
if($b == 'del')
{
    $sql = "DELETE FROM reportbox WHERE sl = '$a' ";

if (mysqli_query($con, $sql)) {
  header("location:allreport.php");
} else {
  echo "Error deleting report: " . mysqli_error($conn);
}
} 
elseif($b== 'read')
{
    $sql = "update reportbox set status = '0' WHERE sl = '$a' ";

if (mysqli_query($con, $sql)) {
  header("location:allreport.php");
} else {
  echo "Error Reading record: " . mysqli_error($conn);
}
}
}
else
{
    header("location:login.php");
}
?>