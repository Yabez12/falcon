<?php
$host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "javatpoint";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $Email=$_POST['Email'];
    $country=$_POST['country'];
    $fname1=$_POST['fname1'];
    $lname1=$_POST['lname1'];
    $Company  =$_POST['Company'];
    $Address=$_POST['Address'];
    $Apartment  =$_POST['Apartment'];
    $City  =$_POST['City'];
    $code=$_POST['code'];
    $phone=$_POST['phone'];
    $tax=$_POST['tax'];
    $Note=$_POST['Note'];
    $Tags=$_POST['Tags'];
    $phone1=$_POST['phone1'];

    if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$sql = "INSERT INTO cus (fname,lname,Email,country,fname1,lname1,Company,Address,Apartment,City,code,phone,tax,Note,Tags,phone1)
VALUES ('$fname','$lname','$Email','$country','$fname1','$lname1','$Company','$Address','$Apartment','$City','$code','$phone','$tax','$Note','$Tags','$phone1')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
  
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
