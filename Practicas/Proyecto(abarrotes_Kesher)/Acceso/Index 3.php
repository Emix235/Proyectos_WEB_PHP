<?php 
include("conexion.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD</title>
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
    <H4 align=center>Insertar datos de la sucursal(INSERT INTO); </H4>
</header>
<div class="form-register">
<center>
<form action="Index 3.php" method="post">
<span>No_Sucursal:</span><input class="controls" type="text" required name="No" placeholder="Numero"><br/>
<span>Dirección:</span><input class="controls" type="text" name="d" placeholder="Sucursal"><br/>
<input class="botons" type ="submit"/ name="add" value="agregar">
<br>
<input type="text" class="controls" readonly value="<?php echo $R?>" >
<br/>
</form>
</center>
</div>
</div>  
</div>
        <li><a href="#miModal2">Editar</a></li>
        <div id="miModal2" class="modal">
        <div class="modal-contenido2">
<header>
	<a href="#">X</a>
    <H4>Para modificar los registros de sucursal(UPDATE)</H4>
</header>
<div class="form-register">
<center>
	<form action="Index 3.php" method="post">
<input class="controls" type="text" name="n" placeholder="Ingresa el No.de sucursal a cambiar ">
<input class="controls" type="text" name="Di" placeholder="Ingresa la nueva direccion">
<input class="botons" type="submit" name="change" VALUE="cambiar">
	</form>
</center>
</div>
</div>	
</div>
        <li><a href="#miModal3">Eliminar</a></li>
        <div id="miModal3" class="modal3">
        <div class="modal-contenido3">
<header>
	<a href="#">X</a>
	<h4><!--<MARK>-->No de sucursales(DELETE).<!--</MARK>--></h4>
</header>
<div class="form-register">
<form action="Index 3.php" method="post">
<center>
<br>
<p >Escribe el Numero de la sucursal que se debe eliminar; </p>
<input class="controls" type="text" name="s" placeholder="Sucursal a borrar">
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

<div class="table-box" id="container">
<table>
<tr>
<th><b>ID_despachador</b></th>	
<th><b>Nombre_despachador</b></th>
</tr>
<tr>	
<?php
$sql="SELECT*FROM tienda_kesher";
$result=mysqli_query($conn,$sql);
while ($registro=mysqli_fetch_array($result)){
?>
<tr>
<?php $c=mb_detect_encoding($registro['No_sucursal'],"utf-8,ISO-8859-1");
 $registro['No_sucursal']=iconv($c,'utf-8',$registro['No_sucursal']);
 ?>
<td><?php echo $registro['No_sucursal'];?></td>
<?php $d=mb_detect_encoding($registro['Direccion'],"utf-8,ISO-8859-1");
 $registro['Direccion']=iconv($d,'utf-8',$registro['Direccion']);
 ?>
<td><?php echo $registro['Direccion'];?></td>
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
	$m=$_POST['No'];
	$d=$_POST['d'];
    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"INSERT INTO tienda_kesher (No_sucursal,Direccion) VALUES ('$m', '$d')");
    mysqli_query($conn,"DELETE FROM `tienda_kesher` WHERE `No_sucursal` = ''");
    $R="Dato agregado correctamente";
}
?>
<?php 
include("conexion.php"); 
if (isset($_REQUEST['elm'])){
$e=$_POST['s'];
    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"DELETE FROM tienda_kesher WHERE No_sucursal='$e'");
  $D="Dato eliminado correctamente";
}
?>
<?php 
include("conexion.php");
if(isset($_REQUEST['change'])){
    $N=$_POST['n'];
	$De=$_POST['Di'];
    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"UPDATE tienda_kesher SET Direccion='$De' WHERE No_sucursal='$N' ");
    $R=" Dato modificado correctamente";
}
 ?>