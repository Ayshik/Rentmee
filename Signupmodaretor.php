<?php
include "db_connect.php";
$name=$email=$uname=$pass=$conf_pass=$phone=$address="";
$name_err=$email_err=$pass_err=$uname_err=$phn_err=$add_err=$conf_pass_err="";
$flag = 1;
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
    if(empty($_POST['uname']))
    {
        $uname_err="USERNAME CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $uname=$_POST['uname'];
      $uname = strtoupper($uname); 
    }
    if(empty($_POST['pass']))
    {
        $pass_err="PASSWORD CAN NOT BE EMPTY";
    $flag = 0;
    }
    else{
      $pass=$_POST['pass'];
    }
    if(empty($_POST['con_pass']))
    {
        $conf_pass_err="CONFIRM PASSWORD CAN NOT BE EMPTY";
    $flag = 0;
    }else{
      $conf_pass=$_POST['con_pass'];
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
    if($pass != $conf_pass)
    {
      $pass_err="PASSWORD AND CONFIRM PASSWORD DOES NOT MATCH";
      $flag = 0;
    }

    if($flag)
    {
    $name=mysqli_real_escape_string($con,$name);
    $pass=mysqli_real_escape_string($con,$pass);
    $email=mysqli_real_escape_string($con,$email);
    $uname=mysqli_real_escape_string($con,$uname);
    $phone=mysqli_real_escape_string($con,$phone);
    $address=mysqli_real_escape_string($con,$address);


    $sql="insert into modarator(username,password,name,phone,address,email) values('$uname','$pass','$name','$phone','$address','$email')";

    if (mysqli_query($con, $sql)) {
      header("location: admin.php");
    } else {
      echo "user table Error: " . $sql . "<br>" . mysqli_error($con);
    }
}      
}
}

include('Adminheader/adminhead.php');
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
      <input type="text" name="uname" placeholder="User Name" value="<?php echo $uname;?>"/>
      <p><?php echo $uname_err;?></p>
      <input type="text" name="name" placeholder="Full Name" value="<?php echo $name;?>"/>
      <p><?php echo $name_err;?></p>
      <input type="text" name="phone" placeholder="Phone Number"value="<?php echo $phone;?>">
      <p><?php echo $phn_err;?></p>
      <input type="text" name="Email" placeholder="Email"value="<?php echo $email;?>">
      <p><?php echo $email_err;?></p>
      <input type="text" name="address" placeholder="Address" value="<?php echo $address;?>"/>
      <p><?php echo $add_err;?></p>
      <input type="password" name="pass" placeholder="Password" />
      <p><?php echo $pass_err;?></p>
      <input type="password" name="con_pass" placeholder="Confirm Password" />	
      <p><?php echo $conf_pass_err;?></p>
      <input type="submit" name="update" value="Update" />
    </form>


	</div>
  </body>
</html>