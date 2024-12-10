<!DOCTYPE html>
<html>
<head>

<title>Ejemplo de Emilio Corona</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">

</head>
<body style="background: yellow;">

<?php 
        
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $usu = 'Emilio';
                $passt = 'C123';
                $usu2 = 'Everar';
                $passt2 = 'UY123';

                $usuario = isset($_REQUEST['usuario']) ? $_REQUEST['usuario'] : null;
                $contraseña = isset($_REQUEST['contraseña']) ? $_REQUEST['contraseña'] : null;

                if ($usu == $usuario && $passt == $contraseña) {
                    session_start();
                    $_SESSION['usuario'] = $_REQUEST['usuario'];
                    header('Location:./A2.php');
                    die();
                } else { echo '<p style="color: red">El usuario y/o contraseña son incorrectas.</p>';
                }
            }
        ?>
<form method="post">
        <center>
                <h1 style="color: black; font-family: Times New Roman;">Ingresa usuario y contraseña</h1>
                <p style="color: black; font-family: fantasy; font-size:150%;">Usuario:<input type="text" name="usuario" maxlength="6" placebolder="Usuario"></p>
                <p style="color: black; font-family:fantasy; font-size:150%;">Contraseña:<input type="password" name="contraseña" maxlength="25" placebolder="Contraseña"></p>
                <button type="submit">
                <img src="boton.jpg" alt="imagen" width="32" height="32" style="vertical-align: middle">Enviar
</button>
            </center>
        </form>

       </body>

</html>