<?php  
session_start();
 
if(!isset($_SESSION['username']))
{
    header('location:doctorlogin.php');
}
?><!DOCTYPE html>
<html>
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="stl2.css">

</head>



<body>
     <div align="center">
        <h2>
                        Hospital managment system
                <qw/h2>
                                <h2></h2>

 

<li><a href="profile.php">Check profile</a><br><br>
<li><a href="update registration.php">update registration </a><br><br>
<li><a href="Update personal schedule.php">Update personal schedule </a><br><br>

<li><a href="Appointment.php"> Appointment</a><br><br>

<li><a href="patients Appointment history.php">patients Appointment history</a><br><br>
    <li><a href="personal schedule history.php"> personal histrory </a><br><br>
        <li><a href="All Patients Details.php">Patients Details </a><br><br>
        

    <li><a href="Check salary.html">Check salary</a><br><br>
      <li><a href="Request for leave of absence.php">Request for leave of absence</a><br><br>

<li><a href="logout.php">Logout</a><br><br>

 
<body>
     
 

<br>
</ul>
</td>
<td>

            </td>
</tr>
