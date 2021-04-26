<?php
session_start();
include 'db_connect.php';
$report =$report_err = $subject = $subject_err = $message = $message_err = "";

if(isset($_SESSION['loggedinuser']))
{
    $user_name = $_SESSION['loggedinuser'];
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $report = $_POST['report'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
        $local_date = date('Y-m-d h:i:sa');

        $sql = "insert into reportbox(sender , receiver , subject , message , date, usertype ,status) values('$user_name' , '$report' , '$subject' , '$message' , '$local_date
        ', 'owner' , '1' )";
        if(mysqli_query($con,$sql))
        {
            header("location: owner.php");
        }
        else{
          echo "error while reporting ".mysqli_error($con);
        }
        
    }
}
else
{
    header("Location:login.php");
}
include('Ownerheader/ownerhead.php');

?>
<style>

.box {
  width: 328px;
    padding: 19px;
    position: absolute;
    top: 56%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #191919;
    text-align: center;
}
.box h1 {
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type="text"],
.box input[type="password"] 
{
  border: 0;
  background: none;
  display: block;
  margin: 05px auto;
  text-align: center;
  border: 2px solid #ff4500;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box p 
{
    border: 0;
  background: none;
  display: block;
  margin: 05px auto;
  text-align: center;
  width: 200px;
  outline: none;
  color: red;
  transition: 0.25s;
}
.box input[type="text"]:focus,
.box input[type="password"]:focus {
  width: 280px;
  border-color: yellowgreen;
}
.box input[type="submit"] {
  border: 0;
  background: none;
  display: block;
  margin: 5px auto;
  text-align: center;
  border: 2px solid #ff4500;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type="submit"]:hover {
  background: #ff4500;
}



</style>
<form class="box" action="" method="post"> 
      <h1>Report To The Moderator</h1>

      <input type="text" name="report" placeholder="Reported User Name" value="<?php echo $report;?>"/>
      <p><?php echo $report_err;?></p>
      <input type="text" name="subject" placeholder="Subject"value="<?php echo $subject;?>">
      <p><?php echo $subject_err;?></p>
      <input type="text" name="message" placeholder="Message"value="<?php echo $message;?>">
      <p><?php echo $message_err;?></p>
      <input type="submit" name="submit" value="Report" />
    </form>


	</div>
  </body>
</html>