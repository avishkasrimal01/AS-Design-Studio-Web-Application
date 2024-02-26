<?php

    if (isset($_POST["submit"])) {

        $name = $_POST["name"];

        $email = $_POST["email"];

        $review = $_POST["review"];

        $con = mysqli_connect("localhost", "root", "", "as_design");

        if (!$con) {
            die("Cannot connect to DB Server");
        }

        $sql = "INSERT INTO `review`(`ID`, `Name`, `Email`, `Review`) VALUES (NULL,'" . $name . "','" . $email . "','" . $review . "');";

        if (mysqli_query($con, $sql)) {
            echo "File Uploaded Sucessfully";
        } else {
            echo "Somthing went wrong";
        }

        header('Location: /ASwebsite/pages/service/review2.php');
    }
?>