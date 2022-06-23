<?php
$host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "javatpoint";
$db = mysqli_connect($host, $user, $password, $db_name);
    
    
    if(!$db){
      die("Connection failed !".mysqli_connect_error());
    }
    
    if(isset($_POST['submit'])){
        $img1=$_POST['img1'];
        $fname1=$_POST['fname1'];
        $fname2=$_POST['fname2'];
        $fname=$_POST['fname'];
        $Productcount=$_POST['Productcount'];

        $file=addslashes(file_get_contents($_FILES['img1']['tmp_name']));
        
        $sql = "INSERT INTO up (img1,fname1,fname2,fname,Productcount)
        VALUES ('$file','$fname1','$fname2','$fname','$Productcount')";
        mysqli_query($db,$sql);
    
    }
if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location:in.php');
  
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
$db->close();
?>