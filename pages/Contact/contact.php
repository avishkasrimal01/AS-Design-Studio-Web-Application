<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];

    $email = $_POST["email"];

    $message = $_POST["message"];

    $con = mysqli_connect("localhost", "root", "", "as_design");

    if (!$con) {
        die("Cannot connect to DB Server");
    }

    $sql = "INSERT INTO `contact`(`ID`, `Name`, `Email`, `Message`) VALUES (NULL,'" . $name . "','" . $email . "','" . $message . "');";

    if (mysqli_query($con, $sql)) {
        echo "File Uploaded Sucessfully";
    } else {
        echo "Somting went wrong";
    }

    header('Location: /ASwebsite/pages/Contact/contact.html');
}
