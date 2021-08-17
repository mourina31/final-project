<?php

  $hostname = 'localhost';
$hostuser = 'root';
$hostpass = '';
$dbname = 'hospitalmanagement';

 
 $con = mysqli_connect($hostname, $hostuser, $hostpass, $dbname);
  if($con->connect_errno){
    echo "Database Connection Failed!...";
    echo "<br>";
    echo $conn1->connect_error;
  }
  



$query = "SELECT * FROM doctor;";
$res = mysqli_query($con, $query);

?>
<!doctype html>
<html lang="en">
  <head>

    


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


   
       <link rel="stylesheet" a href="stl4.css">


    <title>personal schedule history</title>
  </head>
  <body>
<div class="doctor">
    <h2 align=center>personal schedule history</h2>
   <!--  <input type="text" name="" id="myInput" placeholder="Search by Doctor Name" onkeyup="searchFun()">  -->
    <table border="1" cellspacing="5" cellpadding="5" width="100%" id="myTable">
        <thead>
            <tr>
                <th>duserid</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Speciality</th>
                <th>starttime</th>
                <th>endtime</th>
               <!--  <th>total</th> -->
            </tr>
        </thead>
        <tbody>
        <?php
            while($row = mysqli_fetch_assoc($res)){
        ?>
            <tr>
                <td><label><?php echo $row['duserid']; ?></label></td>
                <td><label><?php echo $row['Gender']; ?></label></td>
                <td><label><?php echo $row['Email']; ?></label></td>
                <td><label><?php echo $row['Speciality']; ?></label></td>
                <td><label><?php echo $row['starttime']; ?></label></td>
                 <td><label><?php echo $row['endtime']; ?></label></td>

                
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<!--  <script>
	function searchFun(){
		console.log("asd");
        var filter = document.getElementById('myInput').value.toUpperCase();
        var myTable = document.getElementById('myTable');
        var tr = myTable.getElementsByTagName('tr');

        for(var i=0 ; i<tr.length ; i++){
            var td = tr[i].getElementsByTagName('td')[0];
            if(td){
                var text_value = td.textContent || td.innerHTML;
                if(text_value.toUpperCase().indexOf(filter) > -1){
                    tr[i].style.display = "";
                }
                else{
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script> -->
</body>
</html>