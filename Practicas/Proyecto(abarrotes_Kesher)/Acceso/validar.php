<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","barber_shop");
$consulta="SELECT*FROM usuarios where username='$usuario' and password='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
/*$filas=mysqli_num_rows($resultado);*/
$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:Acceso/Index.php");

}else{
    ?>
    <?php
    include("Inicio.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
/*mysqli_free_result($resultado);*/
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
