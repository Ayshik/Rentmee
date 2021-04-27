
<?php
include('Moderatorheader/moderatorhead.php');



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentme";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if($query="SELECT count(sl) AS total FROM post where status='0'"){
  $result=mysqli_query($conn,$query);
  $values=mysqli_fetch_assoc($result);
  $Ao=$values["total"];

  if($Ao==0)
  {$Ao='no';}
  else {
    $Ao=$values["total"];
  }

}


if($query="SELECT count(sl) AS total FROM reportbox where status='0'"){
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
        <small>Post Request Pending</small>
        <p>You Have <?php echo $Ao ; ?> Pending Posts</p>
      </div>
      <div class="detail-section">
        <a href="ViewRequest.php">More Info </a>
      </div>
    </div>
    <div class="dashbord dashbord-red">
      <div class="icon-section">
        <i class="fa fa-tasks" aria-hidden="true"></i><br>
        <small>Pending Reports</small>
        <p>You Have <?php echo $Ta ; ?> Pending Reports</p>
      </div>
      <div class="detail-section">
        <a href="allreport.php">More Info </a>
      </div>
    </div>
    </div>
</section>
</body>
</html>
