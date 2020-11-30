<?php
if (isset($_POST['submit'])) {
    $name= $_POST['name'];
    $subject= $_POST['subject'];
    $mailfrom= $_POST['mail'];
    $message= $_POST['message'];

$mailto = "ilyaas.kahn@younglings.africa"
$headers = "From: ".$mailfrom;
$txt= "You have recieved an e-mail from ".$name.".\n\n".$message;
mail($mailto, $subject, $text, $headers);
header("location: index.php?mailsend");
}