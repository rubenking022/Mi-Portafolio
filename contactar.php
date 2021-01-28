<?php
        //En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
 $destino = "rubenking022@gmail.com";
    $nombre = $_POST["InputName"];
    $email = $_POST["InputEmail"];
    $asunto = $_POST["InputSubject"];
    $mensaje = $_POST["InputMessage"];
    $contenido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
    mail($destino, "Contacto", $contenido);
    header("Location: /");
//Esto es opcional, aqui pueden colocar un mensaje de "enviado correctamente" o redireccionarlo a algun lugar
?>