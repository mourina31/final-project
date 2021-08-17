
<!doctype html>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


      <link rel="stylesheet" a href="stl4.css">


    <title>Request for leave of absence</title>
  </head>
  <body>
<style>


</style>


    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto ">
            <div class="card">


    <h5 class="card-header bg-info text-white"><b>Request for leave of absence</b></h5>
    <div class="card-body">

   <form name="myform" class="" action="" method="post" onsubmit="return validate()">



        <div class="form-group">
          <label for="exampleInputEmail1"><b>Doctor Name</b></label>
          <input type="text"name="jname"class="form-control" placeholder="write your name" >
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
        <div class="form-group row">
<label for="example-date-input" class="col-2 col-form-label">Date </label>
<div class="col-10">
  <select size="1" name="fday">
<option value="01" label="1st">1st</option>
<option value="02" label="2nd">2nd</option>
<option value="03" label="3rd">3rd</option>
<option value="04" label="4th">4th</option>
<option value="05" label="5th">5th</option>
<option value="06" label="6th">6th</option>
<option value="07" label="7th">7th</option>
<option value="08" label="8th">8th</option>
<option value="09" label="9th">9th</option>
<option value="10" label="10th">10th</option>
<option value="11" label="11th">11th</option>
<option value="12" label="12th">12th</option>
<option value="13" label="13th">13th</option>
<option value="14" label="14th">14th</option>
<option value="15" label="15th">15th</option>
<option value="16" label="16th">16th</option>
<option value="17" label="17th">17th</option>
<option value="18" label="18th">18th</option>
<option value="19" label="19th">19th</option>
<option value="20" label="20th">20th</option>
<option value="21" label="21th">21th</option>
<option value="22" label="22th">22th</option>
<option value="23" label="23th">23th</option>
<option value="24" label="24th">24th</option>
<option value="25" label="25th">25th</option>
<option value="26" label="26th">26th</option>
<option value="27" label="27th">27th</option>
<option value="28" label="28th">28th</option>
<option value="29" label="29th">29th</option>
<option value="30" label="30th">30th</option>
<option value="31" label="31th">31th</option>
...
</select>

 

Month
<select size="1" name="fmonth">
<option value="01" label="Jan">Jan</option>
<option value="02" label="Feb">Feb</option>
<option value="03" label="March">March</option>
<option value="04" label="April">April</option>
<option value="05" label="May">May</option>
<option value="06" label="June">June</option>
<option value="07" label="July">July</option>
<option value="08" label="August">August</option>
<option value="09" label="Septmember">Septmember</option>
<option value="10" label="Octobar">Octobar</option>
<option value="11" label="November">November</option>
<option value="12" label="December">December</option>

 

 

 

 

...
</select>

 

Year <select size="1" name="fyear">
...

<option value="2015" label="2015">2015</option>
<option value="2016" label="2016">2016</option>
<option value="2017" label="2017">2017</option>
<option value="2018" label="2018">2018</option>
<option value="2019" label="2019">2019</option>
<option value="2020" label="2020">2020</option>
<option value="2021" label="2021">2021</option>
...
</select>

 

</div>

 

<br><br>


        <div class="form-group">
          <label for="exampleInputEmail1"><b>How many days</b></label>
          <input type="text"name="hhdays"class="form-control" placeholder="Days" >
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
          <label for="exampleInputEmail1"><b>Reason for leave</b></label>
          <input type="text"name="rrleave"class="form-control" placeholder="leave" >
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
</div>
</div>

      <!-- <button type="submit" class="btn btn-warning"><b>Submit</b></button> -->
      <input type="submit" name="submit" value="Submit"> 
      
      </form>

      <br>
	<p id="errorMsg"></p>

	<script>
			function validate() {
				var isValid = false;

				var Doctorname = document.forms["myform"]["jname"].value;

				var  How_many_days = document.forms["myform"]["hhdays"].value;

				var  Reason_for_leaves= document.forms["myform"]["rrleave"].value;



				if( Doctorname == "" || How_many_days == "" || Reason_for_leave=="") {
					document.getElementById("errorMsg").innerHTML = "<b>Please fill up the form properly.</b>";
					document.getElementById("errorMsg").style.color = "red";
				}
				else {
					isValid = true;
				}

				return isValid;
			}
		</script>

  </div>

          </div>

        </div>

      </div>

      </div>
      </div>
    </section>

<!-- 

<script>
    var signupForm = document.forms.myform;
    signupForm.onsubmit = function(){
     //  var jname = signupForm.jname.value;
     //  var rrleave = signupForm.rrleaver.value;
     //  var hhdays = signupForm.hhdays.value;

     //  alert("UUUU");
     // // console.log(jname);

     console.log("jname");
     console.log(rrleave );
     console.log(hhdays);


      if(jname=="")
      {
        alert("Doctor Name must be filled out!");
        return false;
      }
      if(rrleave=="")
      {
        alert(" must be filled out!");
        return false;
      }
      if(hhdays=="")
      {
        alert("days must be filled out!");
        return false;
      }
      
    }
    </script> -->

    <?php


 

 if(isset($_POST['submit']))
{
   $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "hospitalmanagement";

  $con = mysqli_connect($hostname, $username, $password, $dbname);
  if($con->connect_errno){
    echo "Database Connection Failed!...";
    echo "<br>";
    echo $conn1->connect_error;
  }

  else {
    echo "Database Connection Successful!";


    $doctorname = $_POST['jname'];
     $day =$_POST['fday'];
    $month =$_POST['fmonth'];
    $year =$_POST['fyear'];
   $days = $_POST['hhdays'];
   $reason = $_POST['rrleave'];

   echo $doctorname;


    $sql = "INSERT INTO `leave` (`doctorname` ,`day` , `month` , `year` , `days` , `reason` ) VALUES('$doctorname','$day' ,'$month',' $year','$days','$reason')"; 
    if($con->query($sql)) {
      echo "Data Insert Successful!";
    }
    else {
      echo "Failed to Insert Data.";
      echo "<br>";
      echo $con->error;
    }
  }
}  
  ?>
</body>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->


  
  
  </body>
</html>


