<!DOCTYPE html>
<html>

<head>
	<title>Verification</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
	<?php
	session_start();

	if (isset($_POST["submit"])) {
		$email = $_POST["txtEmail"];
		$password = $_POST["txtpassword"];

		if (isset($_POST["submit"])) {
			$email = $_POST["txtEmail"];
			$password = $_POST["txtpassword"];
			$valid = false;

			if ($email == "admin@1" && $password == "admin") {
				header('Location:/ASwebsite/pages/admin/admin.html');
				exit();
			}

			$con = mysqli_connect("localhost", "root", "", "as_design");

			if (!$con) {
				die("Cannot connect to DB Server");
			}

			$sql = "SELECT * FROM `login` WHERE `username` = '" . $email . "' and `password` = '" . $password . "';";

			$result = mysqli_query($con, $sql);

			if (mysqli_num_rows($result) > 0) {
				$valid = true;
			} else {
				$valid = false;
			}

			if ($valid) {
				$_SESSION["email"] = $email;
				header('Location: /ASwebsite/pages/home/home.html');
				exit();
			} else {
				echo '<script type="text/javascript">
							swal({
								title: "Invalid Credentials",
								text: "Please Try Again",
								icon: "error",
								buttons: false,
							});
								window.setTimeout(function(){

								window.location.href="login.html";
                    
							}, 3000);

						</script>';
			}
		}
	}

	?>