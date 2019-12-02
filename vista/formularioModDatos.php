<?php
include '../templates/cabecera_anteslogin.php';
?>



<div align="center" class="card" style="background-color:lightblue">
    <h1> Modificacion de datos del usuario</h1>

    <form action="../controlador/modificacionDatosUsuario.php" method="POST">

        Nuevo nombre: <br> <input type="text" size="40" maxlength="64" name="name" /> <br><br>
        Introduce antigua contraseña <br> <input type="password" name="passwordA" size="20" required/> <br><br>
        Introduce nueva contraseña <br> <input type="password" name="passwordN" size="20" /> <br><br>
        Introduce correo antiguo: <br> <input type="text" size="40" maxlength="64" name="correoA" required/> <br><br>
        Introduce correo nuevo: <br> <input type="text" size="40" maxlength="64" name="correoN" /> <br><br>
        Introduce nueva ciudad: <br> <input type="text" size="40" maxlength="64" name="ciu" /> <br><br>
        Introduce nuevo numero de telefono: <br> <input type="text" size="40" maxlength="64" name="tele" /> <br><br>
        <input type="submit" name="actualizar" value="Actualizar">
        <input type="reset" value="Borrar">

    </form>
</div>


</body>

</html>

<?php include '../templates/pie.php';?>