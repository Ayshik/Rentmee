<?php
include('Adminheader/adminhead.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentme";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if($query="SELECT count(sl) AS total FROM owner"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $Ao=$values["total"];

  if($Ao==0)
  {$Ao='no';}
  else {
    $Ao=$values["total"];
  }

}


if($query="SELECT count(sl) AS total FROM homeseeker"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $Ta=$values["total"];
  if($Ta==0)
  {$Ta='no';}
  else {
    $Ta=$values["total"];
  }

}


?>

<section>
  <div class="main-section">
    <div class="dashbord">
      <div class="icon-section">
        <i class="fa fa-users" aria-hidden="true"></i><br>
        <small>Total Owner</small>
        <p>You Have <?php echo $Ao ; ?> Active Owners</p>
      </div>
      <div class="detail-section">
        <a href="ownerinfo.php">More Info </a>
      </div>
    </div>
    <div class="dashbord dashbord-red">
      <div class="icon-section">
        <i class="fa fa-users" aria-hidden="true"></i><br>
        <small>Total Owner</small>
        <p>You Have <?php echo $Ta ; ?> Active Homeseeker</p>
      </div>
      <div class="detail-section">
        <a href="homeseekerinfo.php">More Info </a>
      </div>
    </div>
    </div>
</section>
</body>
</html>
