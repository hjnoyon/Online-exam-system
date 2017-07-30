<?php
	// Starting session at very begining
	session_start();
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Online Exam System</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background-color: #e3f2fd;">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">OnlineExam System</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Upcoming exams</a>
      </li>
    </ul>
	<ul class="navbar-nav">
      <?php if(isset($_SESSION['usr_login'])){ ?>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
  <?php }else{ ?>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Sing in</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
    </ul>
  <?php } ?>
  </div>
</nav>