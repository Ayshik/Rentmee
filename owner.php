<?php
include('Ownerheader/ownerhead.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentme";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$Owner = $_SESSION['loggedinuser'];
if($query="SELECT count(sl) AS total FROM post where status='1' and owner='$Owner'"){
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
if($query="SELECT count(sl) AS total FROM applied where status='1' and owner='$Owner'"){
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
            <small>Post Published</small>
            <p>You Have <?php echo $Ao ; ?> Published Posts</p>
          </div>
          <div class="detail-section">
            <a href="DeletePost.php">More Info </a>
          </div>
        </div>
        <div class="dashbord dashbord-red">
          <div class="icon-section">
            <i class="fa fa-tasks" aria-hidden="true"></i><br>
            <small>Homeseeker Responce</small>
            <p>You Have <?php echo $Ta ; ?> Homeseeker Responces</p>
          </div>
          <div class="detail-section">
            <a href="AppliedList.php">More Info </a>
          </div>
        </div>
        </div>
    </section>
  </body>
</html>
