<?php
include("../koneksi.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"]; 
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $sql = "INSERT INTO formcontact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === true) {
        header("Location: ../contact.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
