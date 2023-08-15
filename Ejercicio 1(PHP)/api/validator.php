<?php
    function validateForm($data){

        $errors = [];
    
        // Validar el nombre
        if (empty($data['quantity'])) {
            $errors[] = "El campo nombre es obligatorio";
        }
    
        // Validar el email
        if (empty($_POST['phone'])) {
            $errors[] = "El campo email es obligatorio";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "El formato del email es inválido";
        }
    
    
        // Si no hay errores, enviar el mensaje
        if (empty($errors)) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
        
            $to = "tu@correo.com";
            $subject = "Mensaje de contacto";
            $headers = "De: $name <$email>";
        
            if (mail($to, $subject, $message, $headers)) {
                echo "¡Mensaje enviado con éxito!";
            } else {
                echo "Error al enviar el mensaje";
            }
        } else {
            // Si hay errores, mostrarlos
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        }
        
  
    }

?>