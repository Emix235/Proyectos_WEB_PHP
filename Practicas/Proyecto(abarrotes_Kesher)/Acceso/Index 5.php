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
    <H4 align=center>Insertar datos en CLIENTE/PRODUCTO(INSERT INTO); </H4>
</header>
<div class="form-register">
<center>
<form action="Index 5.php" method="post">
<span>No_cliente:</span><input class="controls" type="text" required name="nc" placeholder="Numero"><br/>
<span>No_producto:</span><input class="controls" type="text" name="np" placeholder="producto"><br/>
<span>Fecha:</span><input class="controls" type="text" name="ch" placeholder="date">
<span>Cantidad:</span><input class="controls" type="text" name="ct" placeholder="Inventario">
<input class="botons" type ="submit"/ name="add" value="ADD">
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
    <H4>Para modificar los datos de los productos(UPDATE)</H4>
</header>
<div class="form-register">
<center>
	<form action="Index 5.php" method="post">
<input class="controls" type="text" name="NCL" placeholder="Ingresa el numero de cliente a cambiar ">
<input class="controls" type="text" name="NNP" placeholder="Ingresa el nuevo numero del producto">
<input class="controls" type="text" name="NF" placeholder="Ingresa la fecha">
<input class="controls" type="text" name="NC" placeholder="Cantidad">
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
	<h4><!--<MARK>-->Eliminar producto(DELETE).<!--</MARK>--></h4>
</header>
<div class="form-register">
<form action="Index 5.php" method="post">
<center>
<br>
<p >Escribe el numero del producto que debes borrar; </p>
<input class="controls" type="text" name="NCP" placeholder="Relacion a borrar">
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
<th><b>No_cliente</b></th>
<th><b>No_producto</b></th>	
<th><b>Fecha</b></th>
<th><b>Cantidad</b></th>
</tr>
<tr>	
<?php
$sql="SELECT*FROM cliente_producto";
$result=mysqli_query($conn,$sql);
while ($registro=mysqli_fetch_array($result)){
?>
<tr>
<?php $c=mb_detect_encoding($registro['No_cliente'],"utf-8,ISO-8859-1");
 $registro['No_cliente']=iconv($c,'utf-8',$registro['No_cliente']);
 ?>
<td><?php echo $registro['No_cliente'];?></td>
<?php $d=mb_detect_encoding($registro['No_producto'],"utf-8,ISO-8859-1");
 $registro['No_producto']=iconv($d,'utf-8',$registro['No_producto']);
 ?>
<td><?php echo $registro['No_producto'];?></td>
<?php $e=mb_detect_encoding($registro['fecha'],"utf-8,ISO-8859-1");
$registro['fecha']=iconv($e,'utf-8',$registro['fecha']);
?> 
<td><?php echo $registro['fecha'];?></td>
<?php $c=mb_detect_encoding($registro['cantidad'],"utf-8,ISO-8859-1");
 $registro['cantidad']=iconv($c,'utf-8',$registro['cantidad']);
 ?>
<td><?php echo $registro['cantidad'];?></td>
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
	$NPX=$_POST['nc'];
	$n=$_POST['np'];
	$pd=$_POST['ch'];
	$cin=$_POST['ct'];
    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"INSERT INTO cliente_producto(No_cliente, No_producto, fecha, cantidad) VALUES ('$NPX','$n','$pd','$cin')");
    mysqli_query($conn,"DELETE FROM `productos_tienda` WHERE `Id_despachador` = ''");
    $R="Dato agregado correctamente";
}
?>
<?php 
include("conexion.php"); 
if (isset($_REQUEST['elm'])){
  $E=$_POST['NCP'];
    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"DELETE FROM cliente_producto WHERE No_cliente='$E'");
  $D="Dato eliminado correctamente";
}
?>
<?php 
include("conexion.php");
if(isset($_REQUEST['change'])){
    $c=$_POST['NCL'];
	$nnn=$_POST['NNP'];
	$f=$_POST['NF'];
	$i=$_POST['NC'];
    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"UPDATE cliente_producto SET No_producto='$nnn',fecha='$f',cantidad='$i' WHERE No_cliente='$c'");
    $R=" Dato modificado correctamente";
}
 ?>