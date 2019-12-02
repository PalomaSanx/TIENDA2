<?php
include '../global/config.php';
include '../global/conexion.php';
session_start();



$nombre = $_POST['name'];
$correoA = $_POST['correoA'];
$correoN = $_POST['correoN'];
$contraseniaN = $_POST['passwordN'];
$ciudad = $_POST['ciu'];
$telefono = $_POST['tele'];

$_SESSION["id_cliente"]='9';
$usuario_sql = "SELECT * FROM cliente WHERE id_cliente='".$_SESSION["id_cliente"]."'";

if(password_verify(($_POST['passwordA']),$usuario_sql['contrasena'])){

        $_UPDATE_SQL="UPDATE cliente SET nombre='$nombre', ciudad ='$ciudad', telefono='$telefono', correo='$correoN', contrasena= '$contraseniaN'
        WHERE correo='$correoA' AND contrasena='$contraseniaA'";
        $resultado = $pdo->query($_UPDATE_SQL);
        $actualiza = $resultado->fetch(PDO::FETCH_ASSOC);
        //ejecutar
        if (!$resultado->execute()) {
             die ("Falló la ejecución de sentencia preparada: (" . $pdo->errno . ") " . $pdo->error);     
        }  
        echo "Inserción completada"; 
        
    }   
    





?>