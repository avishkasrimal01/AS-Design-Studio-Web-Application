<?php session_start(); ?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>View Service</title>
  <link rel="stylesheet" type="text/css" href="viewservice.css" />
</head>

<body>
  <h2>View Service Requests</h2>

  <table width="833" height="107" border="0" align="center">
    <tr>
      <td height="37" bgcolor="#004f76">ID</td>
      <td bgcolor="#004f76">Name</td>
      <td bgcolor="#004f76">Email</td>
      <td bgcolor="#004f76">Category</td>
      <td bgcolor="#004f76">Message</td>
    </tr>

    <?php

    $con = mysqli_connect("localhost", "root", "", "as_design");
    $url = "pay.php";

    if (!$con) {
      die("Cannot connect to DB Server");
    }

    $sql = "SELECT * FROM `request`;";

    $result = (mysqli_query($con, $sql));

    while ($data = mysqli_fetch_array($result)) {
    ?>
      <tr>
        <td bgcolor="grey"><?php echo $data['ID']; ?></td>
        <td bgcolor="grey"><?php echo $data['Name']; ?></td>
        <td bgcolor="grey"><?php echo $data['Email']; ?></td>
        <td bgcolor="grey"><?php echo $data['Category']; ?></td>
        <td bgcolor="grey"><?php echo $data['Message']; ?></td>
      </tr>
    <?php
    }
    ?>
  </table>

  <?php mysqli_close($con);
  ?>

</body>



</html>