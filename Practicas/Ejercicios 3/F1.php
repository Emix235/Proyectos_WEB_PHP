<head>

<title>Ejemplo de Emilio Corona</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">

</head>

       <body>

<form>
<?php 

$cad = "cadena"; //Prueba a cambiar el texto cadena por otro
//Tamaño de la cadena, 
$n = strlen($cad);

echo "Cadena original : ".$cad."  <br />";
echo "La longitud de la cadena es: $n <br />";
$sub1 = substr($cad, 2);
$sub2 = substr($cad, 2, 2);

echo "La subcadena número uno es la siguiente: $sub1 <br />";
echo "La subcadena número dos es la siguiente: $sub2";


?>
       </form>

       </body>

</html>