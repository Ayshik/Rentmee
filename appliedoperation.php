<?php
include('db_connect.php');
include('Homeseekerheader/homeseekerheader.php');

if(isset($_SESSION["loggedinuser"]))
{
$a = $_GET['sl'];
$b = $_GET['name'];
if($b == 'del')
{
    $sql = "DELETE FROM applied WHERE sl = '$a' ";

if (mysqli_query($con, $sql)) {
  header("location:AppliedList.php");
} else {
  echo "Error deleting report: " . mysqli_error($conn);
}
} 
elseif($b== 'inter')
{
    $sql = "update applied set status = 'interested' WHERE sl = '$a' ";

if (mysqli_query($con, $sql)) {
  header("location:AppliedList.php");
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