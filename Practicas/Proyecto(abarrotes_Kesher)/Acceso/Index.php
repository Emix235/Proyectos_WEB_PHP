<?php 
include("conexion.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>CRUD</title>
	<!--<link rel="stylesheet" type="text/css" href="estilo 2.css">-->
	<!--<link rel="stylesheet" type="text/css" href="es.css">-->
	<link rel="stylesheet" type="text/css" href="estilo arriba.css">
</head>
<body>
<header class="header">	
<input type="image" src="menu3.png">
<div class="container logo-nav-container">
<a href="#" class='logo'>LOGO</a>
<nav class="navigation">
	<ul>
		<!--<li><a href="agregar.php">Agregar</a></li>-->
		<li><a href="#miModal">Agregar</a></li>
        <div id="miModal" class="modal">
        <div class="modal-contenido">
<header>
	<a href="#">X</a>
    <H4 align=center>Insertar datos de clientes (INSERT INTO); </H4>
</header>
<div class="form-register">
<form action="Index.php" method="post">
<center>
<span>No_Cliente:</span><input class="controls" type="text" required name="No_c" placeholder="No_Cliente"><br/>
<span>Nombre_Cliente:</span><input class="controls" type="text" name="nom" placeholder="Nombre_Cliente"><br/>
<input class="botons" type ="submit"/ name="add" value="agregar">
<br>
<input type="text" class="controls" readonly value="<?php echo $R?>" >
</center>
</form>
</div>
</div>  
</div>
        <li><a href="#miModal2">Editar</a></li>
        <div id="miModal2" class="modal">
        <div class="modal-contenido2">
<header>
	<a href="#">X</a>
    <H4>Para modificar los datos de los clientes(UPDATE)</H4>
</header>
<div class="form-register">
<center>
	<form action="Index.php" method="post">
<input class="controls" type="text" name="ine" placeholder="Ingresa el No_Cliente a cambiar ">
<br>
<input class="controls" type="text" name="nombre" placeholder="Ingresa el nuevo nombre">
<input class="botons" type="submit" name="change" VALUE="cambiar">
	</form>
	<input type="text" class="controls" readonly value="<?php echo $R ?>">
</center>
</div>
</div>	
</div>
        <li><a href="#miModal3">Eliminar</a></li>
        <div id="miModal3" class="modal3">
        <div class="modal-contenido3">
<header>
	<a href="#">X</a>
	<h4><!--<MARK>-->Registros del cliente (DELETE).<!--</MARK>--></h4>
</header>
<div class="form-register">
<form action="Index.php" method="post">
<center>
<br>
<p >Escribe el No_Cliente del registro que quieres borrar; </p>
<input class="controls" type="text" name="no" placeholder="No a borrar">
<br>
<input class="botons" type="submit" name="elm" value="eliminar">
<br>
<br>
<input type="text" class="controls" readonly value="<?php echo $R?>" >
</form>	
</div>
</div>	
</div>
<li><a href="Inicio.html">Salir</a></li>
	</ul>
</nav>
</div>
</header>
<nav class="mnu">
	<ul>
	<li><input type="text" id="search" placeholder="search"></li>
	<a href="Index.php">
	<li><div class="barra"></div><p class="menu">Clientes</p></li>
	</a>
	<a href="Index 2.php">
	<li><div class="barra"></div><p class="menu">Despachador</p></li>
	</a>
	<a href="Index 3.php">
	<li><div class="barra"></div><p class="menu">Tienda(s)</p></li>
	</a>
    <a href="Index 4.php">
	<li><div class="barra"></div><p class="menu">Productos</p></li>
	</a>
    <a href="Index 5.php">
	<li><div class="barra"></div><p class="menu">Cliente/Producto</p></li>
	</a>
	<a href="Index 6.php">
	<li><div class="barra"></div><p class="menu">Despachador/Cliente</p></li>
	</a>

	</ul>
</nav>



<!--<div class="">
	<a href="agregar.php"><input type="image" src="b1.png" /></a>
	<br>
	<br>
	<input type="image" src="b1.png" href="agregar.php" />
	<br>
</div>-->
<!--<textarea cols="45" rows="40">
</textarea>-->
<div class="table-box" id="container">
<table>
	<!--<caption>ordenar</caption>-->
<tr>
<th><b>No_Cliente</b></th>	
<th><b>Nombre_Cliente</b></th>
</tr>
<tr>	
<?php
$sql="SELECT*FROM cliente";
$result=mysqli_query($conn,$sql);
while ($registro=mysqli_fetch_array($result)){
?>
	<tr>
<?php $c=mb_detect_encoding($registro['No_cliente'],"utf-8,ISO-8859-1");
 $registro['No_cliente']=iconv($c,'utf-8',$registro['No_cliente']);
 ?>
<td><?php echo $registro['No_cliente'];?></td>
<?php $d=mb_detect_encoding($registro['Nombre_cliente'],"utf-8,ISO-8859-1");
 $registro['Nombre_cliente']=iconv($d,'utf-8',$registro['Nombre_cliente']);
 ?>
<td><?php echo $registro['Nombre_cliente'];?></td>	
	</tr>
<?php 
}
?>
</tr>
</table>
</div>

<footer class="footer">
		<p>Pagina diseñada por @Sherlynstudios</p>
</footer>
</body>
</html>
<?php 
include("conexion.php"); 
if (isset($_REQUEST['add'])){
	$c=$_POST['No_c'];
	$n=$_POST['nom'];
    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"INSERT INTO cliente (No_cliente, Nombre_cliente) VALUES ('$c', '$n')");
    mysqli_query($conn,"DELETE FROM `cliente` WHERE `No_cliente` = ''");
    $R="Dato agregado correctamente";
}
?>
<?php 
include("conexion.php"); 
if (isset($_REQUEST['elm'])){
$n=$_POST['no'];
mysqli_select_db($conn,$base) or die('Error al conectar la base de datos');
mysqli_query($conn,"DELETE FROM `cliente` WHERE `No_cliente` =$n");
$d="Dato eliminado correctamente";
}
?>
<?php 
include("conexion.php");
if(isset($_REQUEST['change'])){
    $Ine=$_POST['ine'];
	$NOMB=$_POST['nombre'];
    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"UPDATE cliente SET Nombre_cliente='$NOMB' WHERE No_cliente='$Ine' ");
    $R=" Dato modificado correctamente";
}
 ?>