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
    <H4 align=center>Insertar datos en DESPACHADOR/CLIENTE(INSERT INTO) </H4>
</header>
<div class="form-register">
<center>
<form action="Index 6.php" method="post">
<span>ID_despachador:</span><input class="controls" type="text" required name="ID" placeholder="Numero"><br/>
<span>ID_cliente:</span><input class="controls" type="text" name="IC" placeholder="producto"><br/>
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
	<form action="Index 6.php" method="post">
<input class="controls" type="text" name="NCL" placeholder="Ingresa el ID del despachador">
<input class="controls" type="text" name="NNP" placeholder="Ingresa el numero del cliente a cambiar">
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
<form action="Index 6.php" method="post">
<center>
<br>
<p >Relacion que debes borrar(id del despachador); </p>
<input class="controls" type="text" name="NCP" placeholder="Relacion a borrar">
<br>
<input class="botons" type="submit" name="elm" value="eliminar">
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
<th><b>ID/Despachador</b></th>
<th><b>No de cliente</b></th>	
</tr>
<tr>	
<?php
$sql="SELECT*FROM despachador_cliente";
$result=mysqli_query($conn,$sql);
while ($registro=mysqli_fetch_array($result)){
?>
<tr>
<?php $c=mb_detect_encoding($registro['Id_despachador'],"utf-8,ISO-8859-1");
 $registro['Id_despachador']=iconv($c,'utf-8',$registro['Id_despachador']);
 ?>
<td><?php echo $registro['Id_despachador'];?></td>
<?php $d=mb_detect_encoding($registro['No_cliente'],"utf-8,ISO-8859-1");
 $registro['No_cliente']=iconv($d,'utf-8',$registro['No_cliente']);
 ?>
<td><?php echo $registro['No_cliente'];?></td>
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
	$NPX=$_POST['ID'];
	$n=$_POST['IC'];
    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"INSERT INTO despachador_cliente(Id_despachador, No_cliente) VALUES ('$NPX','$n')");
    mysqli_query($conn,"DELETE FROM `despachador_cliente` WHERE `Id_despachador` = ''");
    $R="Dato agregado correctamente";
}
?>
<?php 
include("conexion.php"); 
if (isset($_REQUEST['elm'])){
  $E=$_POST['NCP'];
    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"DELETE FROM despachador_cliente WHERE Id_despachador='$E'");
  $D="Dato eliminado correctamente";
}
?>
<?php 
include("conexion.php");
if(isset($_REQUEST['change'])){
    $c=$_POST['NCL'];
	$nnn=$_POST['NNP'];
    mysqli_select_db($conn,$base) or die ('Error al conectar la base de datos');
    mysqli_query($conn,"UPDATE despachador_cliente SET No_cliente='$nnn' WHERE Id_despachador='$c'");
    $R=" Dato modificado correctamente";
}
 ?>
 