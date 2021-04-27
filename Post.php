<?php
include('Ownerheader/ownerhead.php');
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
    top: 51%;
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
        <select  name="class_dashboard"><br><br>

          <option value="Yes" selected>Yes</option>
          <option value="NO" >NO</option>




        </select>

      </div>



      <div class="input_field">

        <input style="color:black" type="text" id="block"placeholder="Block Name" name="block">

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
              <select  name="class"><br><br>

                <option value="Family" selected>Family</option>
                <option value="Bechalor" >Bechalor</option>



              </select>

            </div>



                <div class="input_field">


                    <input style="color:black"type="number" id="rno"placeholder="Number of Room" name="roomno">


                </div>

                <div class="input_field">


                    <input style="color:black"type="number" id="rno"placeholder="Number of Room" name="roomno">


                </div>

<!--like this write till no of floor          i am giving the old code




<tr>
        <td>Number of Room</td>
        <td><input type="number"></td>
    </tr>
    <tr>
        <td>Number of Master Bedroom</td>
        <td><input type="number"></td>
    </tr>
    <tr>
        <td>Number of Dining</td>
        <td><input type="number"></td>
    </tr>
    <tr>
        <td>Number of Drawing</td>
        <td><input type="number"></td>
    </tr>
    <tr>
        <td>Number of Attached Bathroom</td>
        <td><input type="number"></td>
    </tr>

    <tr>
        <td>Number of Common Bathroom</td>
        <td><input type="number"></td>
    </tr>

    <tr>
        <td>Number of Balcony</td>
        <td><input type="number"></td>
    </tr>

    <tr>
        <td>Floor Number</td>
        <td><input type="number"></td>
    </tr>
















-->


                <div class="btn">
                    <input type="submit" name="galary_submit" value="Done">
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
