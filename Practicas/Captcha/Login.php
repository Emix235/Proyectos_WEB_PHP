<html>
<head>
        <title>LOGUEAR</title>
        <meta charset="utf8">
    </head>
<body>
<?php
session_start(); 
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $usu = 'emil';
                $passt = '12345';
                
                $usuario = isset($_REQUEST['usuario']) ? $_REQUEST['usuario'] : null;
                $contraseña = isset($_REQUEST['contraseña']) ? $_REQUEST['contraseña'] : null;
                $captcha = isset($_REQUEST['capt']) ? $_REQUEST['capt'] : null;
               
                if ($usu == $usuario && $passt == $contraseña && $captcha == $_SESSION['captcha_code']) {
                    session_start();//session
                    $_SESSION['usuario'] = $_REQUEST['usuario'];
                    // Redireccionamos a la página segura
                    header('Location:./A2.php');//siguiente pagina
                    die();   
                } else {
                    
                    echo '<p style="color: red">El usuario, contraseña o captcha, son incorrectas.</p>';
                }
            }
?>


<form method="post">
        <center>
                <h1 style="color: black; font-family: Times New Roman;">Ingresa usuario y contraseña</h1>
                <p style="color: black; font-family: Forte; font-size:150%;">Usuario: <input type="text" name="usuario" maxlength="6" placeholder="Usuario"></p>
                <p style="color: black; font-family: Forte; font-size:150%;">Contraseña: <input type="password" name="contraseña" maxlength="25" placeholder="Contraseña"></p>
                <p style="color: black; font-family: Forte; font-size:150%;">Valide captcha: </p>
                
<?php 
/*function foo(){
             include 'A3.php';
             return $captcha;
         }*/
/*$w = foo();*/

/*$w = include 'N.php';

echo "$w";*/

/*echo $_SESSION['captcha_code'];*/
?>
<img src="Img.php"/>
                <input type="text" name="capt" maxlength="4" placeholder="Captcha">
                <button type="submit">
  <img src="boton.jpg" alt="imagen" width="32" height="32" style="vertical-align: middle">
  Enviar
</button>

            </center>
        </form>
    </body>
</html>