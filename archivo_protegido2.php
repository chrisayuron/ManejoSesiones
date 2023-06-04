<?php include("sesion.php");//se incluye el archivo de sesion que es el que va a verificar si existe o no la sesion
?>
Bienvenido:<?php echo $_SESSION["user"]?>
<br /><br />
Estas en otra pagina segura con sesiones en php?
<br /><br />
<a href="archivo_protegido">ir a otra pagina segura</a>
<br /> <br />
<a href="salir.php">salir</a>