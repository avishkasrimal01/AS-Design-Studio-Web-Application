<?php

    if (isset($_POST["submit"])) {

        $name = $_POST["name"];

        $email = $_POST["email"];

        $service = $_POST["service"];

        $message = $_POST["message"];

        $con = mysqli_connect("localhost", "root", "", "as_design");

        if (!$con) {
            die("Cannot connect to DB Server");
        }

        $sql = "INSERT INTO `request`(`ID`, `Name`, `Email`, `Category`, `Message`) VALUES (NULL,'" . $name . "','" . $email . "','" . $service . "','" . $message . "');";

        if (mysqli_query($con, $sql)) {
            echo "File Uploaded Successfully";
        } else {
            echo "Somting went wrong";
        }

        header('Location: /ASwebsite/pages/service/category/6/6.html');
    }
?>