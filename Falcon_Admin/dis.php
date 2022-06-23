<?php
$host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "javatpoint";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);

    $coede=$_POST['coede'];
    $Types=$_POST['Types'];
    $dis=$_POST['dis'];
    $APPLIES_TO=$_POST['APPLIES_TO'];
    $Customer_eligibility=$_POST['Customer_eligibility'];
    $te=$_POST['te'];
    $startdate  =$_POST['startdate'];
    $startime=$_POST['startime'];
    $enddate  =$_POST['enddate'];
    $endtime  =$_POST['endtime'];

    if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$sql = "INSERT INTO discount (coede,Types,dis,APPLIES_TO,Customer_eligibility,te,startdate,startime,enddate,endtime)
VALUES ('$coede','$Types','$dis','$APPLIES_TO','$Customer_eligibility','$te','$startdate','$startime','$enddate','$endtime ')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
  
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
