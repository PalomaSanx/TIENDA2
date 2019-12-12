<?php
include '../global/config.php';
include '../global/conexion.php';
session_start();

if(!empty($_POST))
	{
		$correo = $_POST['correo'];
        $nombre = $_POST['nombre'];
        $mensaje = $_POST['mensaje'];

        $destinatario = 'tachbot7@gmail.com';
        $asunto = 'Mensaje posible cliente: '.$_POST['asunto'];
     
        if(mail($destinatario,$asunto,$mensaje)){
            echo "<div class='container' style='color:blue'><br>El mensaje ha sido enviado con exito. En breves recibirá una respuesta.<br>
            Gracias por su interes.<br Tachbot./></div>";
        }else{
            echo 'error al enviar el mensaje';
        }

}


?>

