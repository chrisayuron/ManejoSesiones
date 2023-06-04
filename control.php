<?php
$usuario='ronalito123'; //Valor arbitrario para este ejercicio
$password='abcde';//Valor arbitrario para este ejercicio
if($_POST["user"]==$usuario && $_POST["password"]==$password){
    session_start();//iniciar sesion
    //Se declaran variables de seson
    $_SESION["autenticado"]=true;
    $_SESION["usuario"]=$_POST['user'];
    header("Location:archivo-protegio.php");
}else{
    header("Location:index.php?error=si");
}
?>