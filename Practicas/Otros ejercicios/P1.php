<head>

<title>Ejemplo de Emilio Corona</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">

</head>

       <body>

             <form name="Lista de numeros" method="post" action="P1.php">
             <p>Imprimir valores</p><br>
             

             <input value="Calcular" type="submit"/>
<?php 
$a = 1;
$a1 = 1;
echo '<br />';
echo '<table>';
echo '<thead> Tablas de multiplicar </thead>';
echo '<tbody>';
echo '<tr>';
while ( $a<= 10) {
	echo '<th>Tabla del '.$a.' </th>'; 
    $a++;
}
echo '</tr>';
$a=1;
while ( $a <= 10) {
	echo '<tr>';
	while($a1 <= 10){
     echo '<th> '.$a.'x'.$a1.'='.$a*$a1.' </th>' ; 
    $a1++;
}
echo '</tr>';
	$a++;
    $a1=1;
}
echo '</tbody>';
echo '</table>';
?>




             </form>

       </body>

</html>