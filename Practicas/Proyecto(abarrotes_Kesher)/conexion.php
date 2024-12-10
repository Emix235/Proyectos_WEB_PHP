<?php
$servidor="localhost";
$usuario="root";
$clave="";
$base="abarrotes_kesher";
$conn=mysqli_connect($servidor, $usuario, $clave, $base);

if (!$conn) {
    die("Conexion fallida: " . mysqli_connect_error());
}
$R='Conexión exitosa';
//mysqli_close($conn);
//mysql_connect($servidor,$usuario,$clave);
//mysql_connect($servidor);
//mysql_select_db(database_name)
//mysql_select_db($base,$Conn);
?>