<?php
$servidor="localhost";
$usuario="root";
$clave="";
$base="usuario";
$conn=mysqli_connect($servidor, $usuario, $clave, $base);

if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}else{
$R='Conexión exitosa';
echo $R;
}

/*$conexion=mysqli_connect("localhost","root","","usuario");
$result = mysqli_query($conexion,"SELECT*FROM usuarios where Nombre='Emilio'");
$data = mysqli_fetch_assoc($result);
$v2= "123";
$v1 = $data["password"];

echo $v1;
if (password_verify($v2, $v1)) {
	echo "Contraseña correcta";
	header(header("location:AdminLTE-3.2.0/index.php");
} else {
    echo "Contraseña incorrecta";

}*/
/*$result = mysqli_query($conexion,"SELECT password FROM usuarios");
$data = mysqli_fetch_assoc($result);
$n1=$data["3"];
echo $n1;*/
/*while ($registro=mysqli_fetch_array($result)) {
$_SESSION['Nombre']=$registro;
echo $_SESSION['Nombre'];	
}*/



/*$clave ="Juan";
echo $clave;
echo "<br>";
echo password_hash($clave, PASSWORD_DEFAULT);
echo "<br>";
echo hash("sha256", $clave);*/

//mysqli_close($conn);
//mysql_connect($servidor,$usuario,$clave);
//mysql_connect($servidor);
//mysql_select_db(database_name)
//mysql_select_db($base,$Conn);
?>