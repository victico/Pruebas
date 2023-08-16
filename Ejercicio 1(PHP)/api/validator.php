<?php
    function validateForm($data){

        $errors = [];
    
        // Validate quantity
        if (empty($data['quantity'])) {
            $errors[] = "El campo cantidad es obligatorio";
        }elseif (!filter_var($_POST['quantity'], FILTER_VALIDATE_INT)) {
            $errors[] = "El formato de cantidad debe ser númerico y entero";
        }
    
        // Validate phone
        if (empty($data['phone'])) {
            $errors[] = "El campo phone es obligatorio";
        } elseif (!filter_var($data['phone'], FILTER_VALIDATE_REGEXP,array( "options" => array("regexp"=>"/^[0-9]/")))) {
            $errors[] = "El formato del campo phone no es inválido";
        }
    
        
        // Si no hay errores, enviar el mensaje
        if (empty($errors)) {
            return true;
        } else {
            header("Location: index.php");
        }
        
  
    }

?>