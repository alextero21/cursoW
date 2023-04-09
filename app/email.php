<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
  $to = "alextero.to@gmail.com"; // correo electrónico del destinatario
  $subject = "Mensaje de W Designer"; // asunto del correo
  $name = $_POST['name']; // nombre del remitente
  $email = $_POST['email']; // correo electrónico del remitente
  $message = $_POST['message']; // mensaje

  // Cabeceras del correo electrónico
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/html\r\n";

  // Contenido del correo electrónico
  $body = "Mensaje de: $name<br><br>";
  $body .= "Correo electrónico: $email<br><br>";
  $body .= "Mensaje: $message";

  // Envío del correo electrónico
  if(mail($to, $subject, $body, $headers)){
      echo "El correo electrónico se ha enviado correctamente.";
      var_dump('Succefully!');
  } else{
      echo "Hubo un error al enviar el correo electrónico.";
      var_dump('Failed');
  }
}else{
  var_dump('No enviado ERROR');
}




