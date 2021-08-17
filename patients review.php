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
  



$query = "SELECT * FROM review;";
$res = mysqli_query($con, $query);

?>
<!doctype html>
<html lang="en">
  <head>

    


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <title>View Appoinment</title>
  </head>
  <body>
<div class="patients">
    <h2 align=center>check Appoinment</h2>
    <input type="text" name="" id="myInput" placeholder="Search by ID" onkeyup="searchFun()"> 
    <table border="1" cellspacing="5" cellpadding="5" width="100%" id="myTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>review</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
            while($row = mysqli_fetch_assoc($res)){
        ?>
            <tr>
                <td><label><?php echo $row['ID']; ?></label></td>
                <td><label><?php echo $row['review']; ?></label></td>
                
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
  <script>
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
</script> 
</body>
</html>