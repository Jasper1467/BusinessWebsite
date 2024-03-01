<?php

include 'conn.php';

$naam = $_POST['naam'];
$email = $_POST['email'];
$onderwerp = $_POST['onderwerp'];
$bericht = $_POST['bericht'];

if (isset($_POST['submit'])) {
    $sql = "INSERT INTO contact (naam, email, onderwerp, bericht) VALUES ('$naam', '$email', '$onderwerp', '$bericht')";
    $result = mysqli_query($conn, $sql);
}

?>