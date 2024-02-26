<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Details</title>
<link rel="stylesheet" type="text/css" href="showcontact.css"/>
</head>
<body>
	
<h2>Contact Details</h2>
	
<table width="833" height="107" border="0" align="center">
  <tr>
    <td height="37" bgcolor="#004f76">ID</td>
    <td bgcolor="#004f76">Name</td>
	<td bgcolor="#004f76">Mobile Number</td>
	<td bgcolor="#004f76">Email</td>
  </tr>

	<?php
					
					 $con = mysqli_connect("localhost","root","","as_design");
					 $url="#";
					 
					if(!$con)
					{
						die("Cannot connect to DB Server");
					}
				  
				    $sql = "SELECT * FROM `signup`;";
				  
					$result = (mysqli_query($con,$sql));
					
					while($data = mysqli_fetch_array($result))
{
					?>
					  <tr>
						<td bgcolor="grey"><?php echo $data['UserID']; ?></td>
						<td bgcolor="grey"><?php echo $data['Name']; ?></td>
						<td bgcolor="grey"><?php echo $data['Mobile_Number']; ?></td>
						<td bgcolor="grey"><?php echo $data['Email']; ?></td>
					  </tr>	
					<?php
					}
					?>
					</table>

					<?php mysqli_close($con);			
	?>

</body>
</html>