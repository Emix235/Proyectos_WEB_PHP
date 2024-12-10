<?php
include('conexion.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","usuario");
$consulta="SELECT*FROM usuarios where usuario='$usuario' and password='$contraseña'";

$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

$o2=0;

if($filas){
    $_SESSION['usuario'] = $_REQUEST['usuario'];
    $result = mysqli_query($conexion,"SELECT* FROM usuarios WHERE usuario='$usuario'");
    $data = mysqli_fetch_assoc($result);
    $_SESSION['Nombre']=$data["Nombre"];
    header("location:AdminLTE-3.2.0/index.php");   
}else{
    $resultado=mysqli_query($conexion,"SELECT*FROM usuarios where usuario='$usuario'");
    $filas=mysqli_num_rows($resultado);
    if($filas){
    $data = mysqli_fetch_assoc($resultado);
    $v1=$data["password"];
    if (password_verify($contraseña, $v1)) {
    	$o2=1;
    }
    }
 /*echo $r."  tiene : ".strlen($r)."<br>";*/
}

if($o2==1){
    $_SESSION['usuario'] = $_REQUEST['usuario'];
    $result = mysqli_query($conexion,"SELECT* FROM usuarios WHERE usuario='$usuario'");
    $data = mysqli_fetch_assoc($result);
    $_SESSION['Nombre']=$data["Nombre"];
    header("location:AdminLTE-3.2.0/index.php");
}else{
    ?>
    <?php
    include("index.html");
    ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
	}
/*mysqli_free_result($resultado);*/
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
