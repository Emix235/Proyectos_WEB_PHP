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
    <H4 align=center>Insertar datos de los productos(INSERT INTO); </H4>
</header>
<div class="form-register">
<center>
<form action="Index 4.php" method="post">
<span>No_producto:</span><input class="controls" type="text" required name="np" placeholder="No_producto"><br/>
<span>Nombre_producto:</span><input class="controls" type="text" name="N" placeholder="Nombre"><br/>
<span>Precio:</span><input class="controls" type="text" name="pc" placeholder="$$$">
<span>Cantidad/Inventario:</span><input class="controls" type="text" name="ci" placeholder="Inventario">
<span>Proveedor:</span><input class="controls" type="text" name="pr" placeholder="Proveedor">
<span>No_sucursal:</span><input class="controls" type="text" name="ns" placeholder="Numero de sucursal">
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
    <H4>Para modificar los datos de los productos(UPDATE)</H4>
</header>
<div class="form-register">
<center>
	<form action="Index 4.php" method="post">
<input class="controls" type="text" name="NC" placeholder="Ingresa el Numero a cambiar ">
<input class="controls" type="text" name="nn" placeholder="Ingresa el nuevo nombre del producto(s)">
<input class="controls" type="text" name="npc" placeholder="Ingresa el precio">
<input class="controls" type="text" name="cn" placeholder="Ingresa el cantidad/inventario">
<input class="controls" type="text" name="pv" placeholder="Proveedor">
<input class="controls" type="text" name="NSC" placeholder="No de sucursal">
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
<form action="Index 4.php" method="post">
<center>
<br>
<p >Escribe el numero del producto que debes borrar; </p>
<input class="controls" type="text" name="NPB" placeholder="Producto a borrar">
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
<th><b>No_producto</b></th>
<th><b>Nombre</b></th>	
<th><b>Precio</b></th>
<th><b>Cantidad/Inventario</b></th>
<th><b>Proveedor</b></th>
<th><b>No_Sucursal</b></th>
</tr>
<tr>	
<?php
$sql="SELECT*FROM productos_tienda";
$result=mysqli_query($conn,$sql);
while ($registro=mysqli_fetch_array($result)){
?>
<tr>
<?php $c=mb_detect_encoding($registro['No_producto'],"utf-8,ISO-8859-1");
 $registro['No_producto']=iconv($c,'utf-8',$registro['No_producto']);
 ?>
<td><?php echo $registro['No_producto'];?></td>
<?php $d=mb_detect_encoding($registro['Nombre_producto'],"utf-8,ISO-8859-1");
 $registro['Nombre_producto']=iconv($d,'utf-8',$registro['Nombre_producto']);
 ?>
<td><?php echo $registro['Nombre_producto'];?></td>
<?php $e=mb_detect_encoding($registro['precio'],"utf-8,ISO-8859-1");
$registro['precio']=iconv($e,'utf-8',$registro['precio']);
?> 
<td><?php echo $registro['precio'];?></td>
<?php $c=mb_detect_encoding($registro['cantidad_inventario'],"utf-8,ISO-8859-1");
 $registro['cantidad_inventario']=iconv($c,'utf-8',$registro['cantidad_inventario']);
 ?>
<td><?php echo $registro['cantidad_inventario'];?></td>
<?php $d=mb_detect_encoding($registro['proovedor'],"utf-8,ISO-8859-1");
 $registro['proovedor']=iconv($d,'utf-8',$registro['proovedor']);
 ?>
<td><?php echo $registro['proovedor'];?></td>
<?php $e=mb_detect_encoding($registro['No_sucursal'],"utf-8,ISO-8859-1");
$registro['No_sucursal']=iconv($e,'utf-8',$registro['No_sucursal']);
?> 
<td><?php echo $registro['No_sucursal'];?></td>
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
	$NPX=$_POST['np'];
	$n=$_POST['N'];
	$pd=$_POST['pc'];
	$cin=$_POST['ci'];
	$PS=$_POST['pr'];
	$t=$_POST['ns'];
    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"INSERT INTO productos_tienda (No_producto,Nombre_producto,precio,cantidad_inventario,proovedor,No_sucursal) VALUES ('$NPX','$n','$pd','$cin','$PS','$t')");
    mysqli_query($conn,"DELETE FROM `productos_tienda` WHERE `Id_despachador` = ''");
    $R="Dato agregado correctamente";
}
?>
<?php 
include("conexion.php"); 
if (isset($_REQUEST['elm'])){
$E=$_POST['NPB'];
    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"DELETE FROM productos_tienda WHERE No_producto='$E'");
  $D="Dato eliminado correctamente";
}
?>
<?php 
include("conexion.php");
if(isset($_REQUEST['change'])){
    $c=$_POST['NC'];
	$nnn=$_POST['nn'];
	$f=$_POST['npc'];
	$i=$_POST['cn'];
	$nm=$_POST['pv'];
	$M=$_POST['NSC'];
    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"UPDATE productos_tienda SET Nombre_producto='$nnn',precio='$f',cantidad_inventario='$i',proovedor='$nm',No_sucursal='$M' WHERE No_producto='$c'");
    $R=" Dato modificado correctamente";
}
 ?>