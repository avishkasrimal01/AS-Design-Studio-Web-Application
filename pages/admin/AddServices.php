<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Add Service</title>
  <link rel="stylesheet" type="text/css" href="addservice.css">
</head>

<body>
  <form id="form1" name="form1" method="post" enctype='multipart/form-data'>

    <table width="551" height="702" border="0" align="center">
      <tbody>
        <tr>
          <td height="70" colspan="2" bgcolor="#004f76">
            <h1>Add Services</h1>
          </td>
        </tr>
        <tr>
          <td>Name:</td>
          <td>
            <input type="text" name="txtName" id="txtName">
          </td>
        </tr>
        <tr>
          <td>Category:</td>
          <td>
            <select id="chkcategory" name="chkcategory" required>
              <option value="Logo & Brand Identity Design">Logo & Brand Identity Design</option>
              <option value="Art & Illustration Design">Art & Illustration Design</option>
              <option value="Advertising & Marketing Design">Advertising & Marketing Design</option>
              <option value="Vector Design">Vector Design</option>
              <option value="Business Cards and Stationery Design">Business Cards and Stationery Design</option>
              <option value="Inforgraphic Design">Inforgraphic Design</option>
              <option value="Photography & Retouching">Photography & Retouching</option>
              <option value="Video Editing">Video Editing</option>
              <option value="Other">Other</option>
            </select>
        </tr>
        <tr>
          <td>Description:</td>
          <td>
            <input type="text" name="txtdescription" id="txtdescription">
          </td>
        </tr>
        <!-- <tr>
          <td>Price:</td>
          <td>
            <input type="text" name="txtprice" id="txtprice">
          </td>
        </tr> -->
        <tr>
          <td>Image:</td>
          <td><input type="file" name="fileImage" id="fileImage" />

            <?php

            if (isset($_POST["submit"])) {

              $image = "uploads/" . basename($_FILES["fileImage"]["name"]);

              move_uploaded_file($_FILES["fileImage"]["tmp_name"], $image);

              $Name = $_POST["txtName"];

              $category = $_POST["chkcategory"];

              $description = $_POST["txtdescription"];

              $price = $_POST["txtprice"];

              $con = mysqli_connect("localhost", "root", "", "as_design");

              if (!$con) {
                die("Cannot connect to DB Server");
              }

              $sql = "INSERT INTO `service`(`SID`, `Name`, `Category`, `Description`, `Price`, `path`) VALUES (NULL,'" . $Name . "','" . $category . "','" . $description . "','" . $price . "','" . $image . "');";

              if (mysqli_query($con, $sql)) {
                echo "File Uploaded Sucessfully";
              } else {
                echo "Somting went wrong";
              }
            }

            ?>

          </td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" name="submit" id="submit" value="Add">
            <input type="reset" name="reset" id="reset" value="Reset">
          </td>
        </tr>
      </tbody>
    </table>
  </form>

</body>

</html>