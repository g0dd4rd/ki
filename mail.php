<?php
$to      = 'zkratocaster@gmail.com';
$subject = $_GET['fullname'];
$level = "";
if(isset($_GET['level'])) {
  $level = $_GET['level'];
}

$instrument = "";
if(isset($_GET['instrument'])) {
  $instrument = $_GET['instrument'];
}

$class = "";
if(isset($_GET['class'])) {
  $class = $_GET['class'];
}

$message = "Level: " . $level . ", guitar: " . $instrument . ", class: " . $class;
$headers = "From: " . $_GET['email'] . "\r\n" .
    "Reply-To: " . $_GET['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
