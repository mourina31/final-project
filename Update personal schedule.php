<?php 

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "hospitalmanagement";
 
$conn = mysqli_connect($serverName, $userName, $password, $dbName);
 
if(mysqli_connect_errno()){
  echo "Error: " . mysqli_connect_errno();
  die();
}
$dname = $days = $vhour = $hname =$regSuccessful = "";
$errExits = 0;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  if(empty($_POST['dname']))
  {
    // $usernameErr = "Username cannot be empty!";
    $errExits=1;
  }
  else
  {
      $dname = mysqli_real_escape_string($conn, $_POST['dname']);
    }
    if(empty($_POST['vhour']))
  {
    
    $errExits=1;
  }
  else
  {
      $vhour = mysqli_real_escape_string($conn, $_POST['vhour']);
    }
    if(empty($_POST['hname']))
  {
    
    $errExits=1;
  }
  else
  {
      $hname = mysqli_real_escape_string($conn, $_POST['hname']);
    }
    $days = mysqli_real_escape_string($conn, $_POST['days']);

    // if(errExits == 0){
      $sqlInsert = "insert into docreq (dname, days, vhour, hname)
          values('$dname', '$days','$vhour','$hname');";

          mysqli_query($conn, $sqlInsert);
          // $regSuccessful = "Registration  successful";
    }

// }

 ?>
<!doctype html>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" a href="stl4.css">


    <title>View Appoinment</title>
  </head>
  <body>
<style>


</style>


    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto ">
            <div class="card">


    <h5 class="card-header bg-info text-white"><b>Update personal schedule</b></h5>
    <div class="card-body">

      <form name="myForm" class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


<h3 style="color:green;"><?php echo $regSuccessful; ?></h3>
        <div class="form-group">
          <label for="exampleInputEmail1"><b>Doctor</b></label>
          <input type="text"name="dname"class="form-control" placeholder="write your name" >
          <?php


          if(isset($_GET['err'])){ ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $_GET['err']; ?>
</div>
              <?php
              }

               ?>

        </div>
<br><br>
     
 

<strong>Days</strong>
<select size="1" name="days">
<option value="01" label="Saturday"></option>
<option value="02" label="Sunday">Feb</option>
<option value="03" label="Monday">March</option>
<option value="04" label="Tuesday">April</option>
<option value="05" label="Wednesday">May</option>
<option value="06" label="Thursday">June</option>
<option value="07" label="home">home</option>
 

 <br><br>

 

 

 

<br><br>


        <div class="form-group">
          <label for="exampleInputEmail1"><b>Visiting hour start</b></label>
          <input type="text"name="vhour"class="form-control" placeholder="time" >
          <?php


          if(isset($_GET['err'])){ ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $_GET['err']; ?>
</div>
              <?php
              }

               ?>

        </div>

        <br><br>


        <div class="form-group">
          <label for="exampleInputEmail1"><b>Hospital name</b></label>
          <input type="text"name="hname"class="form-control" placeholder="input number" >
          <?php


          if(isset($_GET['err'])){ ?>
          <div class="alert alert-danger" role="alert">
              <?php echo $_GET['err']; ?>
</div>
              <?php
              }

               ?>

        </div>

          










      <?php if(isset($_GET['primary'])){ ?>
      <div class="alert alert-primary" role="alert">
         <strong><?= $_GET['primary'];?></strong>
      </div>

    <?php } ?>

<!-- 
      <button type="submit" class="btn-warning"><b>Submit</b></button> -->
      <input type="submit" name="submit" value="Submit"> 
      
      </form>

  </div>

          </div>

        </div>

      </div>

      </div>
      </div>
    </section>


<script>
    var signupForm = document.forms.myForm;
    signupForm.onsubmit = function(){
      var dname = signupForm.dname.value;
      var vhour = signupForm.vhour.value;
      var hname = signupForm.hname.value;
      
      console.log("jname");
      if(dname=="")
      {
        alert("Doctor Name must be filled out!");
        return false;
      }
      if(vhour=="")
      {
        alert("Hour must be filled out!");
        return false;
      }
      if(hname=="")
      {
        alert("Hospital must be filled out!");
        return false;
      }
      
    }
    </script>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


    <script >
  function myFunction() {
var x = document.getElementById("myInput");
if (x.type === "password") {
  x.type = "text";
} else {
  x.type = "password";
}
}

  </script>

   
  </body>
 

</html>


