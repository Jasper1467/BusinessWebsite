<?php

$body = $_POST['message'];
$subject = $_POST['subject'];
$target_mail = "pegasoft@gmail.com";

header("Location: mailto:" . $target_mail . "?subject=" . $subject . "&body=" . $body);

?>