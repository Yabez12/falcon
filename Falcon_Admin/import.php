<?php
use SimpleExcel\SimpleExcel;

if(isset($_POST['import'])){


	if(move_uploaded_file($_FILES['excel_file']['tmp_name'], $_FILES['excel_file']['name'])){
		require_once('C:/wamp64/SimpleExcel/SimpleExcel.php');

		$excel=new SimpleExcel('csv');

		$excel->parser->loadFile($_FILES['excel_file']['name']);

		$foo = $excel->parser->getField();
		

		$count=1;
		$db=mysqli_connect('localhost','root','','javatpoint');


		while (count($foo)>$count) {
			$image=$foo[$count][0];
			$ProductName=$foo[$count][1];
			$BrandName=$foo[$count][2];
			$Cost=$foo[$count][3];
			$Productcount=$foo[$count][4];


			$query="INSERT INTO up (image,ProductName,BrandName,Cost,Productcount)";
			$query.="VALUES ('$image','$ProductName','$BrandName','$Cost',$Productcount)";
			mysqli_query($db,$query);
			$count++;
		}

echo "import sucessfully";
		
		
	}

}

?>