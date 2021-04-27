<?php
include('Homeseekerheader/homeseekerheader.php');
include('db_connect.php');

if(isset($_SESSION["loggedinuser"]))
{
$b = $_SESSION["loggedinuser"];
if(isset($_POST['foundhome']))
{

    $sql = "DELETE FROM applied WHERE  seeker = '$b' ";

if (mysqli_query($con, $sql)) {
  header("location:homeseeker.php");
} else {
  echo "Error deleting report: " . mysqli_error($conn);
}
}
 
?>
<style>


body{

}

.wrapper{
  position: absolute;
  top: 48%;
  left: 58%;
    transform: translate(-47%,-50%);
    max-width: 243px;
    width: 109%;
    background: #fff;
    padding: 26px;
    border-radius: 5px;

    flex: 23px;
}
.cpic{

	margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: 'Josefin Sans', sans-serif;
  font-weight: bold;



}
.wrapper h2{
  text-align: center;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #332902;
}

.wrapper .input_field{
  margin-bottom: 10px;
}

.wrapper .input_field input[type="text"],.input_field input[type="number"],
.wrapper textarea{
  border: 1px solid #e0e0e0;
  width: 100%;
  padding: 10px;
}

.wrapper textarea{
  resize: none;
  height: 80px;
}

.wrapper .btn input[type="submit"]{
  border: 0px;
  margin-top: 15px;
  padding: 10px;
  text-align: center;
  width: 100%;
  background: #fece0c;
  color: #332902;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-weight: bold;
  border-radius: 25px;
  cursor: pointer;
}

#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}

/*2nd////////////////////////////////////////////////////////////////////////////////*/

.wrapper2{
  position: absolute;
  top: 49%;
  left: 160%;
      transform: translate(-47%,-50%);
      max-width: 244px;
      width: 109%;
      background: #fff;
      padding: 26px;
      border-radius: 5px;
      flex: 23px;
}
.cpic{

	margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: 'Josefin Sans', sans-serif;
  font-weight: bold;



}
.wrapper2 h2,h3,h4{
  text-align: center;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #332902;
}

.wrapper2 .input_field{
  margin-bottom: 10px;
}

.wrapper2 .input_field input[type="text"],.input_field input[type="number"],
.wrapper2 textarea{
  border: 1px solid #e0e0e0;
  width: 100%;
  padding: 10px;
}

.wrapper2 textarea{
  resize: none;
  height: 80px;
}

.wrapper2 .btn input[type="submit"]{
  border: 0px;
  margin-top: 15px;
  padding: 10px;
  text-align: center;
  width: 100%;
  background: #fece0c;
  color: #332902;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-weight: bold;
  border-radius: 25px;
  cursor: pointer;
}


.wrapper3{
  position: absolute;
    top: 70%;
    /* left: 160%; */
    right: 175%;
    transform: translate(-47%,-50%);
    max-width: 244px;
    width: 109%;
    background: #fff;
    padding: 36px;
    border-radius: 5px;
    flex: 23px;
}
.cpic{

	margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: 'Josefin Sans', sans-serif;
  font-weight: bold;



}
.wrapper3 h2{
  text-align: center;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #332902;
}

.wrapper3 .input_field{
  margin-bottom: 10px;
}

.wrapper3 .input_field input[type="text"],.input_field input[type="number"],
.wrapper3 textarea{
  border: 1px solid #e0e0e0;
  width: 100%;
  padding: 10px;
}

.wrapper3 textarea{
  resize: none;
  height: 80px;
}

.wrapper3 .btn input[type="submit"]{
  border: 0px;
  margin-top: 15px;
  padding: 10px;
  text-align: center;
  width: 100%;
  background: #fece0c;
  color: #332902;
  text-transform: uppercase;
  letter-spacing: 5px;
  font-weight: bold;
  border-radius: 25px;
  cursor: pointer;
}

</style>
<section>  
<div class="wrapper">

<form method="post" action="" enctype ="multipart/form-data">

  <div class="cpic">
  <h2>Found Home Action</h2>
<h3>After pressing this button You will be removed from all applied post</h3>

      <div class="btn">
                    <input type="submit" name="foundhome" value="Found Home">
                </div>

                </div>
</section>
<?php }
else
{
    header("location:login.php");
}
?>
