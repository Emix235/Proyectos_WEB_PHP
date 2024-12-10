<?php 

session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location:./A4.php');
    die();
}
?>
<!DOCTYPE html>
<html>
<head>

<title>Ejemplo de Emilio Corona</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
</head>
<body style="background-color: yellow;">
<center>
<h1 style="color: black; font-family: Times New Roman;"><marquee BEHAVIOR=alternate SCROLLAMOUNT=10> Binvenido has sido LOGUEADO <?= $_SESSION['usuario'] ?></h1> </marquee> <br>
        <a href="A3.php"><p style="color: black; font-family: Forte; font-size:100%;">Album</a><br>
        <img src="G.jpg" width="400" height="400">
</center>
</body>

</html>