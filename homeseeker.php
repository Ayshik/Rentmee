
<?php
include('Homeseekerheader/homeseekerheader.php');


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentme";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if($query="SELECT count(sl) AS total FROM post where status='1'"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $Ao=$values["total"];

  if($Ao==0)
  {$Ao='no';}
  else {
    $Ao=$values["total"];
  }

}

$seeker = $_SESSION['loggedinuser'];
if($query="SELECT count(sl) AS total FROM applied where status='interested' and seeker='$seeker'"){
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
        <small>Active Home Post</small>
        <p>You Have <?php echo $Ao ; ?> Home Posts for Rent</p>
      </div>
      <div class="detail-section">
        <a href="RentSearch.php">More Info </a>
      </div>
    </div>
    <div class="dashbord dashbord-red">
      <div class="icon-section">
        <i class="fa fa-tasks" aria-hidden="true"></i><br>
        <small>Owners Feedback</small>
        <p>You Have <?php echo $Ta ; ?> Owners Feedback</p>
      </div>
      <div class="detail-section">
        <a href="ConfirmedByOwner.php">More Info </a>
      </div>
    </div>
    </div>
</section>

</body>
</html>
