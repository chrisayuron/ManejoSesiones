<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones con PHP</title>
    <style> 
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    html,body{
        width:100%;
        height: 100vw;
    }
    body{
        display:grid;
        place-items: center;
    }
    span{
        color:#f00;
        font-size: 2em;
    }
    form{
        box-shadow: 0px 0px 5px #000;
        border-radius: 5%;
        margin:auto;
        text-align: center;
        width: 400px;
        color:black;
        padding: 2em;
    } 
    
   
    </style>
</head>
<body>
    <form action="control.php" name="autentication" method="post" enctype="application/x-www-form-urlencoded">
    <?php 
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
        if($_GET["error"]=="si"){
            echo "<span>Verificar datos </span>";
        }
        // else{
        //     echo "<span>Introduce tus datos </span>";
        // }
    ?>
    <h1>INGRESAR</h1>
    <br/><br/>
    <label for="user" name="user">User</label>
    <input type="text">
    <br/><br/>
    <label for="password">Password</label>
    <input type="password" name="password" >
    <br/><br/>
    <input type="submit" name="ingresar" value="LOGIN">
    </form>
</body>
</html>