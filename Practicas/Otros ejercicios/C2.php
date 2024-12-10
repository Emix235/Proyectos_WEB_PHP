<head>

<title>Ejemplo de Emilio Corona</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">

</head>
<body>

<?php 
$a = 1;
$a1 = 1;
echo '<br />';
echo '<table>';
echo '<thead><p> Tablas de multiplicar (1) </p></thead>';
echo '<tbody>';
echo '<tr>';
while ( $a<= 5) {
	echo '<th>Tabla del '.$a.' </th>'; 
    $a++;
}
echo '</tr>';
$a=1;
while ( $a <= 10) {
	echo '<tr>';
	while($a1 <= 5){
     echo '<th> '.$a.'x'.$a1.'='.$a*$a1.' </th>' ; 
    $a1++;
}
echo '</tr>';
	$a++;
    $a1=1;
}
echo '</tbody>';
echo '</table>';

$a = 6;

echo '<br/><br/>';
echo '<table>';
echo '<thead><p> Tablas de multiplicar (2) </p></thead>';
echo '<tbody>';
echo '<tr>';
while ( $a<= 10) {
	echo '<th>Tabla del '.$a.' </th>'; 
    $a++;
}
echo '</tr>';
$a=1;
$a1 = 6;
while ( $a <= 10) {
	echo '<tr>';
	while($a1 <= 10){
     echo '<th> '.$a1.'x'.$a.'='.$a*$a1.' </th>' ; 
    $a1++;
}
echo '</tr>';
	$a++;
    $a1=6;
}
echo '<br/><br/>';
echo '</tbody>';
echo '</table>';


?>
  </form>
</body>

</html>


