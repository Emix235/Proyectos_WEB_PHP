<?php 
// Comprobamos si existe la sesión de apodo
session_start();
if (!isset($_SESSION['usuario'])) {
    // En caso contrario devolvemos a la página login.php
    header('Location:./LOGIN.php');
    die();
}
?>
<html>
<title>LOGUEAR2</title>
        <meta charset="utf8">
    </head>
<body background="/LOGIN-PHP/img.jpg">
        <!-- Saludamos -->
        <h1 style="color: black; font-family: Times New Roman;"><marquee BEHAVIOR=alternate SCROLLAMOUNT=15>¡BIENVENIDO HAS SIDO LOGUEADO! <?= $_SESSION['usuario'] ?></h1> </marquee> 
        <center>
        <a href="fotos.php"> <p style="color: black; font-family: Forte; font-size:100%;">¡¡Ver fotos!!</a></p>
        <img src="G.jpg" width="400" height="400">
        </center>
        </html>
</body>