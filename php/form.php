<?php
  $destino = " correo@.com";
  $name = $_Post["name"];
  $email = $_Post["email"];
  $affair = $_Post["affair"];
  $message = $_Post["message"];

  $cont = "Name: " . $name . "\nEmail: " . $email . "\nAffair: " . $affair . "\nMessage: " . $message;
  mail($destino, $affair, $cont);
  header("Location:index.html") 

?>
