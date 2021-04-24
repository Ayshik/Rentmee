<?php
session_start();

include "db_connect.php";
$name=$email=$uname=$pass=$conf_pass=$phone=$address=$old_pass_db="";
$name_err=$email_err=$pass_err=$uname_err=$phn_err=$add_err=$conf_pass_err="";
$flag = 1;
$user_name = $_SESSION['loggedinuser'];
if(isset($_SESSION['loggedinuser']))
{
    
    //populate textfield from db value
    $sql = "select * from owner where username='$user_name'";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result))
    {
        $name  = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $address = $row['address'];
        $old_pass_db= $row['Password'];
    }
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST['update']))
  {
    if(empty($_POST['name']))
    {
        $name_err="NAME CAN NOT BE EMPTY";
    $flag = 0;
    }else
    {
      $name=$_POST['name'];
    }
    if(empty($_POST['Email']))
    {
        $email_err="EMAIL CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $email=$_POST['Email'];
    }
    
    if(empty($_POST['old_pass']))
    {
        $pass_err="OLD PASSWORD CAN NOT BE EMPTY";
    $flag = 0;
    }
    else{
      $pass=$_POST['old_pass'];
    }
    if(empty($_POST['new_pass']))
    {
        $conf_pass_err="NEW PASSWORD CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $conf_pass=$_POST['new_pass'];
    }
    if(empty($_POST['phone']))
    {
      $phn_err="PHONE NUMBER CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $phone=$_POST['phone'];
    }
    if(empty($_POST['address']))
    {
      $add_err="ADDRESS CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $address=$_POST['address'];
    }
    if($pass == $old_pass_db)
    {
        $flag = 1;
    if($pass == $conf_pass)
    {
      $pass_err="OLD PASSWORD AND NEW PASSWORD CAN NOT BE SAME";
      $flag = 0;
    }
    }
    else{
        $pass_err="Password Does not match";
      $flag = 0;
    }
    if($flag)
    {
    $name=mysqli_real_escape_string($con,$name);
    $pass=mysqli_real_escape_string($con,$conf_pass);
    $email=mysqli_real_escape_string($con,$email);
    $phone=mysqli_real_escape_string($con,$phone);
    $address=mysqli_real_escape_string($con,$address);


    $sql1="update owner set name='$name' ,  email = '$email' , Password = '$pass' , phone = '$phone' , address = '$address' where username = '$user_name' ";

    if (mysqli_query($con, $sql1)) {
        echo '<script>alert("UPDATE SUCCESFUL")</script>';
        header("location:owner.php");
    } else {
      echo "user table Error: " . $sql1 . "<br>" . mysqli_error($con);
    }
    }      
}
}
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
      <h1>Modaretor Profile Update</h1>
      <p style = "color: Yellow;">Name</p>
      <input type="text" name="name" placeholder="Full Name" value="<?php echo $name;?>"/>
      <p><?php echo $name_err;?></p>
      <p style = "color: Yellow;">Phone Number</p>
      <input type="text" name="phone" placeholder="Phone Number"value="<?php echo $phone;?>">
      <p><?php echo $phn_err;?></p>
      <p style = "color: Yellow;">Email</p>
      <input type="text" name="Email" placeholder="Email"value="<?php echo $email;?>">
      <p><?php echo $email_err;?></p>
      <p style = "color: Yellow;">Address</p>
      <input type="text" name="address" placeholder="Address" value="<?php echo $address;?>"/>
      <p><?php echo $add_err;?></p>
      <p style = "color: Yellow;">Old Password</p>
      <input type="password" name="old_pass" placeholder="Old Password" />
      <p><?php echo $pass_err;?></p>
      <p style = "color: Yellow;">New Password</p>
      <input type="password" name="new_pass" placeholder="New Password" />	
      <p><?php echo $conf_pass_err;?></p>
      <input type="submit" name="update" value="Update" />
    </form>


	</div>
  </body>
</html>