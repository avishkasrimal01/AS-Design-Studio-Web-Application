<?php


	if(isset($_POST["submit"]))
	{
		
		$name = $_POST["txtName"];
		$phone = $_POST["txtPhone"];
		$email = $_POST["txtEmail"];
		$password = $_POST["txtpassword"];
		
		
		$con = mysqli_connect("localhost","root","","as_design");
					 
			if(!$con)
			{
				die("Cannot connect to DB Server");
			}
		
		$sql1 = "INSERT INTO `signup`(`UserID`, `Name`, `Mobile_Number`, `Email`, `Password`) VALUES ('null','".$name."','".$phone."','".$email."','".$password."');";
		$sql2 = "INSERT INTO `login`(`username`, `Password`) VALUES ('".$email."','".$password."');";
		
		mysqli_query($con,$sql1);
		mysqli_query($con,$sql2);
	
			
		header('Location: /ASwebsite/pages/login/login.html');
		
	}
		
	
?>
