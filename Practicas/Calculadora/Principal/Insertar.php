<?php 
include("conexion.php"); 
	$Matricula=$_POST['matricula'];
	$Nombre=$_POST['nombre'];
	$Apellido=$_POST['apellidop'];
	$usuario=$_POST['usuario'];
	$pass=$_POST['contraseña'];
	
	$passc = password_hash($pass, PASSWORD_DEFAULT);
    echo $passc;

    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"INSERT INTO usuarios (Matricula,Nombre,usuario,password,ApellidoP) VALUES ('$Matricula', '$Nombre','$usuario','$pass','$Apellido')");
   
    mysqli_query($conn,"UPDATE usuarios SET password='$passc' WHERE Matricula='$Matricula'");

    mysqli_query($conn,"DELETE FROM usuarios WHERE Matricula = ''");
    header("Location:Captcha.html");
?>
<!-- name="matr" required>
    <p>Nombre:</p>
    <input type="text" name="nam">
    <p>Apellidos (paterno):</p>
	<input type="text" name="ApP" required> 
	<p>Usuario:</p>
	<input type="text" name="usuario" required>
    <p>Contrase&ntilde;a:</p>
    <input type="text" name="cont"> -->