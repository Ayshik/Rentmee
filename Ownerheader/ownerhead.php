<?php
session_start();

setcookie("cook",time()+3600);//1 hour cookie

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Space Owner's Dashbord</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Ownerheader/owner.css" />
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
            <h3><a href="owner.php">Rent Me</a></h3>
          </div>
          <div class="welcome">
            <h1>Welcome Space Owner ~ </h1>
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
      <header>Owner's Area</header>
      <ul>
        <li>
          <a href="Owner.php"><i class="fas fa-qrcode"></i>Dashboard</a>
        </li>
		<li>
          <a href="Post.php"><i class="fas fa-link"></i>Create POST</a>
        </li>
        <li>
          <a href="DeletePost.php"><i class="fas fa-link"></i>Review POST</a>
        </li>
        <li>
          <a href="AppliedList.php"><i class="fas fa-stream"></i>Home-Seeker List</a>
        </li>
        <li>
          <a href="ProfileUpdateOwner.php"><i class="fas fa-calendar-week"></i>Profile Update</a>
        </li>
      </ul>
    </div>
   

