<?php
session_start();
setcookie("cook",time()+3600);
include('session.php');
if (!isLoggedIn()) {

 header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Homeseeker Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Homeseekerheader/sample.css" />
    <link
    href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans"
    rel="stylesheet"
  />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <header class="header">
      <div class="bgimage">
        <div class="menu">
          <div class="leftmenu">
            <h3><a herf="parkerarea.php">Rent me</a></h3>
          </div>
          <div class="welcome">
            <h1>Welcome Homeseeker~<?php echo $_SESSION["loggedinuser"];?></h1>
            <div class="rightmenu">
             <button id="buttonone" < onclick="window.location.href='logout.php';">
                Logout
              </button>
          </div>
        </div>
    </header>
    <input type="checkbox" id="check" />
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Dashboad</header>
      <ul>
        <li>
          <a href="homeseeker.php"><i class="fas fa-qrcode"></i>Dashboard</a>
        </li>
        <li>
          <a href="RentSearch.php"><i class="fas fa-link"></i>Search For Rent</a>
        </li>
        <li>
          <a href="FoundHome.php"><i class="fas fa-stream"></i>Found Home</a>
        </li>
        <li>
          <a href="ConfirmedByOwner.php"><i class="fas fa-calendar-week"></i>Confirmation</a>
        </li>
		    <li>
          <a href="MyProfile2.php"><i class="fas fa-calendar-week"></i>Profile Update</a>
        </li>

        <li>
          <a href="Reportbyseeker.php"><i class="fas fa-calendar-week"></i>Report</a>
        </li>

      </ul>
    </div>
