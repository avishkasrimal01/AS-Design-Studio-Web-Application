<?php session_start();
if (!isset($_SESSION["ID"])) {
  header('Location:/ASwebsite/pages/admin/admin.html');
}
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Show Service</title>
  <link rel="stylesheet" type="text/css" href="showservice.css" />
</head>

<body>


  <?php

  $con = mysqli_connect("localhost", "root", "", "as_design");

  if (!$con) {
    die("Cannot connect to DB Server");
  }

  $sql = "SELECT * FROM `service` WHERE `ID` = '" . $_SESSION["ID"] . "';";

  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

  ?>

    <form id="form1" name="form1" method="post">

      <table width="669" height="702" border="0" align="center">
        <tbody>

          <tr>
            <td height="70" colspan="2" bgcolor="#004f76">
              <h1>View Service</h1>
            </td>
          </tr>
          <tr>
            <td width="111">ID:</td>
            <td width="430">
              <input type="text" name="txtID" id="txtID" value="<?php echo $row["ID"]; ?>">
            </td>
          </tr>
          <tr>
            <td>Name:</td>
            <td>
              <input type="text" name="txtName" id="txtName" value="<?php echo $row["Name"]; ?>">
            </td>
          </tr>
          <tr>
            <td>Category:</td>
            <td>
              <input type="text" name="txtType" id="txtType" value="<?php echo $row["Category"]; ?>">
            </td>
          </tr>
          <tr>
            <td>Description:</td>
            <td>
              <input type="text" name="txtSize" id="txtSize" value="<?php echo $row["Description"]; ?>">
            </td>
          </tr>
          <tr>
            <td>Price:</td>
            <td>
              <input type="text" name="txtprice" id="txtprice" value="<?php echo $row["Price"]; ?>">
            </td>
          </tr>
          <tr>
            <td>Image:</td>
            <td><img src="<?php echo $row["path"]; ?>" width='300' height='300'></td>
          </tr>
          <tr>
            <td><input type="button" name="button2" id="button2" onclick="document.location='/ASwebsite/pages/admin/admin.html'" value="Back">
              <!-- check this row -->
              <input type="button" name="button" id="button" onclick="document.location='UpdateSt.php'" value="Update">
            </td>

          </tr>

        </tbody>
      </table>
    </form>

  <?php

  }

  ?>

</body>

</html>