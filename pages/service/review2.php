<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="review.css">
    <title>Graphic Design Reviews</title>
</head>
<body>
    <header>
        <h1>Graphic Design Reviews</h1>
    </header>
    </section>

	<?php
					
					 $con = mysqli_connect("localhost","root","","as_design");
					 $url="#";
					 
					if(!$con)
					{
						die("Cannot connect to DB Server");
					}
				  
				    $sql = "SELECT * FROM `review`;";
				  
					$result = (mysqli_query($con,$sql));
					
					while($data = mysqli_fetch_array($result))
                    {
					?>
				    <div class="box">
                        <center><h3><p class="id">ID No: <?php echo $data['ID']; ?></p></h3></center>
						<p><center><h2><?php echo $data['Name']; ?></h2></center></p>
						<center><p class="email">Email: <?php echo $data['Email']; ?></p></center>
						<center><p class="review-text">Review: <?php echo $data['Review']; ?></p></center><br>
                    </div>
                    <br>
					<?php
					}
					?>

					<?php mysqli_close($con);			
	                ?>

</body>
</html>