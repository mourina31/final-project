<?php

  $hostname = 'localhost';
$hostuser = 'root';
$hostpass = '';
$dbname = 'hospitalmanagement';

 

$db_connect = mysqli_connect($hostname,$hostuser,$hostpass,$dbname);


    $doctorname = $_POST['dname'];
     $day =$_POST['day'];
    $month =$_POST['month'];
    $year =$_POST['year'];
   $Visit = $_POST['vhour'];
   $total = $_POST['tpatients'];



      $insert = "INSERT INTO views(doctorname,day,month,year,Visit,total) VALUES('$doctorname','$day' ,'$month','$year','$Visit','$total')";



      $insert_result = mysqli_query($db_connect,$insert);

      

  
 ?>
 <a href="/D/Doctor/index.php"> Click here to go to the Dashboard.</a>


