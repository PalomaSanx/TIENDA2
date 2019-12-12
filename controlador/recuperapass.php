<?php
include '../global/config.php';
include '../global/conexion.php';

if(!empty($_POST))
	{
		$correo = $_POST['correo'];
		
		$sql_select = "SELECT * FROM cliente WHERE correo='" . $_POST["correo"] . "'"; /* Seleccionar el cliente que se corresponde al usuario introducido */
        $resultado_select = $pdo->query($sql_select); /* Realizamos la consulta y almacenamos en resultado_select */
        $usuario_select = $resultado_select->fetch(PDO::FETCH_ASSOC);
        if (!$usuario_select) { 
            echo 'El correo introducido no existe. Introduce un correo válido.';
        }else{
            
        echo "Recuperar Password - Sistema de Usuarios<br>
        Hola ".$usuario_select['nombre'].": Se ha solicitado un reinicio de contraseña. <br/><br/>Para restaurar la contraseña visita la siguiente dirección: <a href=>restaurar</a>
        <br>Hemos enviado un correo electronico a la direcion $correo para restablecer tu password.<br />";
       
        $pass=$usuario_select['contrasena'];

        mail($correo, "password", "holiiiii" );

        echo "<a href='../vista/login.php' >Iniciar Sesion</a>";
        }  
			
	}
	




?>