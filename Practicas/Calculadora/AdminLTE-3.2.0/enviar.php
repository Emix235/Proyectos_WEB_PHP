<?php
include("conexion.php");
    $d=$_GET["id"];
    echo "$d";
    $result = mysqli_query($conn,"SELECT*FROM usuarios WHERE Matricula='$d'");
    $data = mysqli_fetch_assoc($result);

    $_SESSION["Nombre"]=$data["Nombre"];
    $_SESSION["Matricula"]=$data["Matricula"];
    $_SESSION["Usuario"]=$data["usuario"];
    $_SESSION["ApellidoP"]=$data["ApellidoP"];
    $Nombre=$data["Nombre"];
    $Matricula=$data["Matricula"];
    $Usuario=$data["usuario"];
    $apellidop=$data["ApellidoP"];
    header("location:editar.php")
?>
