<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>Doctor Profile Update</title>
 
  

  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="stl4.css">

    </head>



  <?php
include 'head.html'; 
$db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'hospitalmanagement' ) or die(mysqli_error($db));
  session_start();
$username=$_SESSION['username'];
$query=mysqli_query($db,"SELECT * FROM Doctor where username='$username'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
  
  <h1>Doctors Profile</h1>
  
<div class="profile-input-field">
        
        <form method="post" action="#" >
    <br>
          <div class="form-group">
            <label> <b>First Name :</b></label>
            <input type="text" class="form-control" name="FirstName" style="width:20em;" placeholder="FirstName" value="<?php echo $row['FirstName']; ?>" readonly>
          </div>
      <br><br>
      <div class="form-group">
            <label><b>Last Name :</b></label>
            <input type="text" class="form-control" name="LastName" style="width:20em;" placeholder="LastName" value="<?php echo $row['LastName']; ?>" readonly>
          </div>
      <br><br>
       <div class="form-group">
            <label><b>Date of Birth :</b></label>
            <input type="date" class="form-control" name="DOB" style="width:20em;" placeholder="DOB" value="<?php echo $row['DOB']; ?>" readonly>
          </div>
      <br><br>
      <div class="form-group">
            <label><b>Gender :</b></label>
            <input type="text" class="form-control" name="Gender" style="width:20em;" placeholder="Gender" value="<?php echo $row['Gender']; ?>" readonly>
          </div>
      <br><br>
          <div class="form-group">
            <label><b>Email :</b></label>
            <input type="email" class="form-control" name="Email" style="width:20em;" placeholder="Email" required value="<?php echo $row['Email']; ?>" readonly>
          </div>
      <br><br>
      <div class="form-group">
            <label><b>username :</b></label>
            <input type="text" class="form-control" name="username" style="width:20em;" placeholder="username" value="<?php echo $row['username']; ?>" readonly>
          </div>
      <br><br>
      <div class="form-group">
            <label><b>Speciality :</b></label>
            <input type="text" class="form-control" name="Speciality" style="width:20em;" placeholder="Speciality" value="<?php echo $row['Speciality']; ?>" readonly>
          </div>
     
      <br><br><br>
      <a href="index.php"> Click here to go back.</a>
        </form>
      </div>
      </html>