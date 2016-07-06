<?
    if($_POST['nombre'] != "" && $_POST['email'] != "" && $_POST['mensaje'] != ""){
        //Enviar el formulario
        header('Location: contacto.php?mail=enviado');
    }else{
        header('Location: contacto.php?mail=error');
    }
?>