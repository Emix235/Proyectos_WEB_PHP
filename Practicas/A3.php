<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location:./A4.php');
    die();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_destroy();
        header('Location:./A1.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body style="background-color: yellow;">
     <!-- Botón para cerrar la sesión -->
     <center>
     <form method="post">
          <button type="submit"><img src="boton.jpg" align="right" width="50" height="50" style="vertical-align: middle"></button>
     </form>
    <p style="color: black; font-family: Forte; font-size:150%;"><a href="A2.php">Regresar</a></p><br>
     <h1 align="center" style="color:#1f3abd;font-family:'Times New Roman', Times, serif; font-size:300%;">Mis Fotos</h1><br>
    <div style="display: grid; grid-gap: 5px;">
    <ul>
    <img src="G.jpg" width="200" height="200"><br> <!--imagenes-->
	<img src="g2.jpg" width="200" height="200"><br>
	<img src="g3.jpg" width="150" height="200"><br>
	<img src="g4.jpg" width="150" height="200"><br>
    </ul>
    </div>
    </center>
</body>
</html>