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
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Adminheader/sample.css" />
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
            <h1>Welcome Admin~<?php echo $_SESSION["loggedinuser"];?></h1>
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
      <header>Admin Dashboadr</header>
      <ul>
        <li>
          <a href="admin.php"><i class="fas fa-qrcode"></i>Dashboard</a>
        </li>
        <li>
          <a href="ownerinfo.php"><i class="fas fa-link">House Owner Info</i></a>
        </li>
        <li>
          <a href="homeseekerinfo.php"><i class="fas fa-stream"></i>Home Seeker Info</a>
        </li>
        <li>
          <a href="Signupmodaretor.php"><i class="fas fa-calendar-week"></i>Add Moderator</a>
        </li>
		 <li>
          <a href="moderatorinfo.php"><i class="fas fa-calendar-week"></i>View Moderator</a>
        </li>
      </ul>
    </div>
