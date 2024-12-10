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
    <H4 align=center>Insertar datos de los despachadores(INSERT INTO); </H4>
</header>
<div class="form-register">
<center>
<form action="Index 2.php" method="post">
<span>Id_despachador:</span><input class="controls" type="text" required name="ID" placeholder="INE"><br/>
<span>Nombre_despachador:</span><input class="controls" type="text" name="ND" placeholder="Nombre_despachador"><br/>
<span>Teléfono:</span><input class="controls" type="text" name="TD" placeholder="Teléfono">
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
    <H4>Para modificar los registros de despachador(UPDATE)</H4>
</header>
<div class="form-register">
<center>
	<form action="Index 2.php" method="post">
<input class="controls" type="text" name="I" placeholder="Ingresa el ID para cambiar ">
<input class="controls" type="text" name="nam" placeholder="Ingresa el nuevo nombre del despachador">
<input class="controls" type="text" name="mo" placeholder="Ingresa su telefono">
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
	<h4><!--<MARK>-->Registros de despachador(DELETE).<!--</MARK>--></h4>
</header>
<div class="form-register">
<form action="Index 2.php" method="post">
<center>
<br>
<p >Escribe el ID del despachador que quieres borrar; </p>
<input class="controls" type="text" name="D" placeholder="ID a borrar">
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
<th><b>Telefono</b></th>
</tr>
<tr>	
<?php
$sql="SELECT*FROM despachador";
$result=mysqli_query($conn,$sql);
while ($registro=mysqli_fetch_array($result)){
?>
<tr>
<?php $c=mb_detect_encoding($registro['Id_despachador'],"utf-8,ISO-8859-1");
 $registro['Id_despachador']=iconv($c,'utf-8',$registro['Id_despachador']);
 ?>
<td><?php echo $registro['Id_despachador'];?></td>
<?php $d=mb_detect_encoding($registro['Nombre_despachador'],"utf-8,ISO-8859-1");
 $registro['Nombre_despachador']=iconv($d,'utf-8',$registro['Nombre_despachador']);
 ?>
<td><?php echo $registro['Nombre_despachador'];?></td>
<?php $e=mb_detect_encoding($registro['telefono'],"utf-8,ISO-8859-1");
$registro['telefono']=iconv($e,'utf-8',$registro['telefono']);
?> 
<td><?php echo $registro['telefono'];?></td>
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
	$l=$_POST['ID'];
	$na=$_POST['ND'];
	$t=$_POST['TD'];
    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"INSERT INTO despachador (Id_despachador,Nombre_despachador,telefono) VALUES ('$l', '$na', '$t')");
    mysqli_query($conn,"DELETE FROM `despachador` WHERE `Id_despachador` = ''");
    $R="Dato agregado correctamente";
}
?>
<?php 
include("conexion.php"); 
if (isset($_REQUEST['elm'])){
$d=$_POST['D'];
    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"DELETE FROM despachador WHERE Id_despachador='$d'");
  $D="Dato eliminado correctamente";
}
?>
<?php 
include("conexion.php");
if(isset($_REQUEST['change'])){
    $i=$_POST['I'];
	$nm=$_POST['nam'];
	$M=$_POST['mo'];
    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"UPDATE despachador SET Nombre_despachador='$nm',telefono='$M' WHERE Id_despachador='$i' ");
    $R=" Dato modificado correctamente";
}
 ?>