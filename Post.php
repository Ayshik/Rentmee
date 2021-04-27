<?php
include('Ownerheader/ownerhead.php');
include('db_connect.php');

if(isset($_POST['info']))
{
  $user = $_SESSION["loggedinuser"];
  $category = $_POST['category'];
  $room = $_POST['room'];
  $bedroom = $_POST['bedroom'];
  $dining = $_POST['dining'];
  $drawing = $_POST['drawing'];
  $attachbathroom = $_POST['attachbathroom'];
  $commonbathroom = $_POST['commonbathroom'];
  $balcony = $_POST['balcony'];
  $floor = $_POST['floor'];
  $lift = $_POST['lift'];
  $block = $_POST['block'];
  $road = $_POST['road'];
  $rent = $_POST['rent'];

  $sql1 = "insert into post(category , room , bedroom , dining , drawing , attachbathroom , commonbathroom , balcony , floor , lift , block , road , rent, photo1 , photo2 , photo3 ,status , owner) values('$category' , '$room' , '$bedroom' , '$dining' , '$drawing' , '$attachbathroom' , '$commonbathroom' , '$balcony' , '$floor' , '$lift' ,'$block' , '$road' , '$rent' , 'null' , 'null' , 'null' , '0' , '$user')";

if (mysqli_query($con, $sql1)) {
  header("location:DeletePost.php");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}



}
if(isset($_POST['room_submit']))
{
  require_once 'db_connect2.php';

  {


  if(!empty('$_SESSION["loggedinuser"]')){
    $var=$_SESSION["loggedinuser"];

  }
{
   //file upload 1
      $target_dir="Picture/";
      $target_file = $target_dir . basename($_FILES["room_image"]["name"]);

      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

      move_uploaded_file($_FILES["room_image"]["tmp_name"], $target_file);

  //echo $target_file;
  $query="UPDATE `post` SET `photo1`='$target_file' WHERE `sl`='1'";
  execute($query);
}
{
$target_dir2="Picture/";
$target_file2 = $target_dir2 . basename($_FILES["room_image2"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

move_uploaded_file($_FILES["room_image2"]["tmp_name"], $target_file2);

//echo $target_file;
$query="UPDATE `post` SET `photo2`='$target_file2' WHERE `sl`='1'";
execute($query);
}

{  $target_dir3="Picture/";
  $target_file3 = $target_dir3 . basename($_FILES["room_image3"]["name"]);

  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));

  move_uploaded_file($_FILES["room_image3"]["tmp_name"], $target_file3);

//echo $target_file;
$query="UPDATE `post` SET `photo3`='$target_file3' WHERE `sl`='1'";
execute($query);}
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
.wrapper2 h2{
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
  <div class="main-section">
    <div class="dashbord">
      <div class="icon-section">



<!--wrapper1------------------------middle one------------------------------------------>

        <div class="wrapper">

<form method="post" action="" enctype ="multipart/form-data">

  <div class="cpic">
  <h2>Fasilities</h2>



      <div class="input_field">
        <label for="Class"style="color:black">Lift</label>
        <select  name="lift"><br><br>

          <option value="available" selected>Yes</option>
          <option value="not available" >NO</option>
        </select>
      </div>

      <div class="input_field">

        <input style="color:black" type="text" id="block"placeholder="Block Name" name="block">

      </div>
      <div class="input_field">

      <input style="color:black"type="number" id="rno"placeholder="Road" name="road">

      </div>

      <div class="input_field">

      <input style="color:black"type="number" id="rno"placeholder="Rent" name="rent">

      </div>
      <div class="input_field">

      <div class="btn">
                    <input type="submit" name="info" value="Done">
                </div>

                </div>

<!--like this till picture there will be one button for 1st one and 2nd one 3rd one will be optional owner can add picture if he wish-->


    </div>



<!--wrapper2-----------------------------------------------3dr one------------------->




          <div class="wrapper2">



            <div class="cpic">
                  <h2>Room Picture insert</h2>
                    <div id="error_message" > </div>




                        <div class="input_field">

                            <label for="pic"style="color:black">Picture 1</label >
                            <input style="color:black"type="file" id="dur" name="room_image">

                        </div>

                        <div class="input_field">

                            <label for="pic"style="color:black">Picture 2</label >
                            <input style="color:black"type="file" id="dur2" name="room_image2">

                        </div>

                        <div class="input_field">

                            <label for="pic"style="color:black">Picture 3</label >
                            <input style="color:black"type="file" id="dur3" name="room_image3">

                        </div>


                        <div class="btn">
                            <input type="submit" name="room_submit" value="Done">
                        </div>

                      </div>

<!--wrapper3-------------------------------1st one----------------------------------->


            <div class="wrapper3">

            <div class="cpic">
            <h2>Room info</h2>



            <div class="input_field">
              <label for="Class"style="color:black">Select catagory :</label>
              <select  name="category"><br><br>

                <option value="Family" selected>Family</option>
                <option value="Bechalor" >Bechalor</option>

              </select>

            </div>

                <div class="input_field">


                    <input style="color:black"type="number" id="rno"placeholder="Number of Room" name="room">


                </div>

                <div class="input_field">

                    <input style="color:black"type="number" id="rno"placeholder="Number of BedRoom" name="bedroom">

                </div>

                <div class="input_field">


                    <input style="color:black"type="number" id="rno"placeholder="Number of Dining" name="dining">


                </div>

                <div class="input_field">

                    <input style="color:black"type="number" id="rno"placeholder="Number of Drawing" name="drawing">

                </div>

                <div class="input_field">


                    <input style="color:black"type="number" id="rno"placeholder="Number of Atttach BathRoom" name="attachbathroom">


                </div>

                <div class="input_field">


                    <input style="color:black"type="number" id="rno"placeholder="Number of Common BathRoom" name="commonbathroom">


                </div>

                <div class="input_field">

                    <input style="color:black"type="number" id="rno"placeholder="Number of Balcony" name="balcony">

                </div>

                <div class="input_field">

<input style="color:black"type="number" id="rno"placeholder="Number of Floor" name="floor">

</div>








              </div>
















          </form>
        </div>

      </div>
    </div>
  </div>
</section>
</body>
</html>
