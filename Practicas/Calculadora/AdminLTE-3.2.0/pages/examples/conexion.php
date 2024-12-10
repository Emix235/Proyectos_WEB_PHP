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

//mysqli_close($conn);
//mysql_connect($servidor,$usuario,$clave);
//mysql_connect($servidor);
//mysql_select_db(database_name)
//mysql_select_db($base,$Conn);
?>