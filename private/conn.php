<?php

$conn = mysqli_connect("localhost", "", "", "pegasoft");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>