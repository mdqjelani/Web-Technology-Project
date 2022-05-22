<?php
	$First_Name=$_POST['First_Name'];
	$Last_Name=$_POST['Last_Name'];
	$Father_Name=$_POST['Father_Name'];
	$user_id=$_POST['user_id'];
	$password=$_POST['password'];
    $Ph_No=$_POST['Ph_No'];
    $date=$_POST['date'];
	$gender=$_POST['gender'];
	$Address=$_POST['Address'];
	$Country=$_POST['Country'];
	//DB code
	$conn=new mysqli('localhost','root','','project');
	//$conn=new mysqli('url','dbusername','xamppwd','dbname')//
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}
	else{
		$stmt=$conn->prepare("insert into registration(First_Name,Last_Name,Father_Name,user_id,password,Ph_No,date,gender,Address,Country) values(?,?,?,?,?,?,?,?,?,?)");			//query//
		//bind to specify datatypes (i-int,d-double,s-string,b-BLOB)//
		$stmt->bind_param("sssssissss",$First_Name,$Last_Name,$Father_Name,$user_id,$password,$Ph_No,$date,$gender,$Address,$Country);
		$stmt->execute(); //executing query//
		//echo "registered successfully...";
		
		echo "registered successfully";
		header("Refresh: 2; URL=home.php"); 
		$stmt->close();
		$conn->close();
  		exit; 
	}


?>