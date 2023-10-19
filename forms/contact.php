<?php
include("../koneksi.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"]; 
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Masukin ke database
    $sql = "INSERT INTO formcontact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === true) {
        // Data berhasil dimasukkan ke dalam database
        header("Location: ../contact.php");
    } else {
        // Jika ada kesalahan saat memasukkan data
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>