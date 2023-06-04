<?php 
session_start();
/*Evalua que la session continue verificando una de las variables
creadas en control.php, cuando ya no coincide con su valor inicial
se redirige al archivo de salir.php
*/
if(!$_SESSION["autenticado"]){
    header("Location:salir.php")
}

?>